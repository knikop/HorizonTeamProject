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
				header('location:/Main/index');
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
		header('location:/Main/index');
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
					header('location:/User/index');
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

}