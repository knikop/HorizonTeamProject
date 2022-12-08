<?php
namespace app\controllers;

class User extends \app\core\Controller{

	public function index(){
		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->get($_POST['email']);
			if(password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['email'] = $user->email;
				$profile = $user->getProfile();
				$_SESSION['profile_id'] = $profile->profile_id;
				header('location:/Product/index');
			}else{
				header('location:/User/index?error=Wrong username/password combination!');
			}
		}else{
			$this->view('User/index');
		}
	}

	#[\app\filters\Login]
	public function logout(){
		session_destroy();
		header('location:/Product/index');
	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_confirm']){
				$user = new \app\models\User();//TODO
				$check = $user->get($_POST['email']);
				if(!$check){
					$user->email = $_POST['email'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$_SESSION['user_id'] = $user->insert();
					$_SESSION['email'] = $_POST['email'];
					header('location:/Profile/create?message=Before shopping, please create a profile for your account');
				}else{
					header('location:/User/register?error=The email "'.$_POST['email'].'" is already in use. Select another.');
				}
			}else{
				header('location:/User/register?error=Passwords do not match.');
			}

		}else{
			$this->view('User/register');
		}
	}

		#[\app\filters\Login]
		public function update(){
		$user = new \App\models\User();
		$user = $user->get($_SESSION['email']);
		if(isset($_POST['action'])){
			if(!password_verify($_POST['old_password'], $user->password_hash)){
				header('location:/User/update?error=Wrong current password!');	
			} else {	
				if($_POST['password'] == $_POST['password_confirm'] && !empty($_POST['password'])){
					$user->password_hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
					$user->updatePassword();
					header('location:/Profile/index');
				}else
					header('location:/User/update?error=New passwords do not match or new password is empty!');
			}
		}else{
			$this->view('User/update');
		}
	}

	public function check2fa(){
		if(!isset($_SESSION['user_id'])) header('location:/User/index');
		if(isset($_POST['action'])){
			$currentcode = $_POST['currentcode'];
			if(\app\core\TokenAuth6238::verify(
				$_SESSION['secret_key'],$currentcode)){
				$_SESSION['secret_key'] = null;
				header('location:/User/account');
			}
		}else{
			$this->view('User/check2fa');
		}
	}

	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}

	//http://localhost/User/makeQRCode?data=otpauth://totp/Tarzan@Example.com%3Fsecret%3DU6BALU26GH4KI5YY%26issuer%3DAwesome%20Example%20App
	//http://localhost/User/makeQRCode?data=otpauth://totp/yukidope@gmail.com@Example.com%3Fsecret%3DCFH6AQHL2OXHUYLF%26issuer%3DAwesome%20Example%20App
	#[\app\filters\Login]
	public function setup2fa(){
		if(isset($_POST['action'])){
			$currentcode = $_POST['currentCode'];
			if(\app\core\TokenAuth6238::verify(
				$_SESSION['secretkey'],$currentcode)){
				//the user has verified their proper 2-factor authentication setup
				$user = new \App\models\User();
				$user->user_id = $_SESSION['user_id'];
				$user->secret_key = $_SESSION['secretkey'];
				$user->update2fa();
				header('location:/Profile/index');
			}else{
				header('location:/User/twofasetup?error=token not verified!');//reload
			}
		}else{
			$secretkey = \App\core\TokenAuth6238::generateRandomClue();
			$_SESSION['secretkey'] = $secretkey;
			$url = \app\core\TokenAuth6238::getLocalCodeUrl(
				$_SESSION['user_id'],
				'Example.com',
				$secretkey,
				'Awesome Example App');
			$this->view('User/twofasetup', $url);
		}
	}
}