<?php
namespace app\controllers;

class User extends \app\core\Controller{

	public function index(){
	//To access the application, as a person, I can log into the application.
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
		//To protect my account, as a user, I can logout of the application.
		session_destroy();
		header('location:/Product/index');
	}

	public function register(){
		//To become a user, as a person, I can register.
		if(isset($_POST['action'])){//form submitted

			if($_POST['password'] == $_POST['password_confirm']){//match
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

	function check2fa(){
		if(!isset($_SESSION['user_id'])){
			header('location:/User/index');
			return;
		}
		//if the form is sent
		if(isset($_POST['action'])){
			$currentCode = $_POST['currentCode'];
			if(\app\core\TokenAuth6238::verify($_SESSION['secret_key'],$currentCode)){
				$_SESSION['secret_key']=null;
				header('location:/User/account');
			}else{
				session_destroy();
				header('location:/User/index');
			}
		}else{
			$this->view('User/check2fa');
		}
	}

	#[\app\filters\Login]
	public function setup2fa(){
		if(isset($_POST['action'])){
			//verification of the code sent by the user
			$currentCode = $_POST['currentCode'];
			if(\app\core\TokenAuth6238::verify($_SESSION['secretkey'],$currentCode)){
				$user = new \app\models\User();
				$user->user_id = $_SESSION['user_id'];
				$user->secret_key = $_SESSION['secretkey'];
				$user->update2fa();
				header('location:/User/account');
			}else{
				header('location:/User/setup2fa?error=Wrong code provided');
			}
		}else{
			$secretkey = \App\core\TokenAuth6238::generateRandomClue();
			$_SESSION['secretkey'] = $secretkey;
			$url = \app\core\TokenAuth6238::getLocalCodeUrl(
				$_SESSION['username'],
				'Awesome.com',
				$secretkey,
				'Awesome App');
			$this->view('User/twofasetup', $url);

		}
	}

	public function makeQRCode(){
		$data = $_GET['data'];
		\QRcode::png($data);
	}
}
