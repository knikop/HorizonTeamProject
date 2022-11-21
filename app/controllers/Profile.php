<?php
namespace app\controllers;

class Profile extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function index(){
		//To manage my online content, as a user, I can view my profile page.
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['profile_id']);
		$this->view('Profile/detail', $profile);
	}

	public function detail($profile_id){
		//To find interesting publications, as a person or user, I can view other user profile pages.
		$profile = new \app\models\Profile();
		$profile = $profile->get($profile_id);
		$this->view('Profile/detail', $profile);
	}

	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function edit(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['profile_id']);
		if(isset($_POST['action'])){
			$profile->fullname = $_POST['fullname'];
			$profile->address = $_POST['address'];
			$profile->city = $_POST['city'];
            $profile->zipcode = $_POST['zipcode'];
            $profile->state = $_POST['state'];
            $profile->country = $_POST['country'];
			$profile->update();
			//header('location:/Profile/index');
		}else{
			$this->view('Profile/edit', $profile);
		}
	}

	#[\app\filters\Login]
	public function create(){
		//I must have a profile... TODO: find the statement.
		if(isset($_POST['action'])){
			$profile = new \app\models\Profile();
			$profile->fullname = $_POST['fullname'];
			$profile->address = $_POST['address'];
			$profile->city = $_POST['city'];
            $profile->zipcode = $_POST['zipcode'];
            $profile->state = $_POST['state'];
            $profile->country = $_POST['country'];
			$profile->user_id = $_SESSION['user_id'];
			$_SESSION['profile_id'] = $profile->insert();
			header('location:/Profile/index');
		}else{
			$this->view('Profile/create');
		}

	}

}