<?php
namespace app\controllers;

class Profile extends \app\core\Controller{

	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function index(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['profile_id']);
		$this->view('Profile/detail', $profile);
	}

	public function allProfile(){
		$profile= new \app\models\Profile();
		$profiles = $profile->getAll(isset($_GET['sort'])? $_GET['sort']: null);
		$this->view('Profile/allProfile', $profiles);
	}

	public function search(){
		$profile = new \app\models\Profile();
		$profiles = $profile->search($_GET['search_term']);
		$this->view('Profile/allProfile', $profiles);
	}

	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function detail($profile_id){
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
			$profile->update();
			header('location:/Profile/index');
		}else{
			$this->view('Profile/edit', $profile);
		}
	}

	#[\app\filters\Login]
	#[\app\filters\Profile]
	public function editAvatar(){
		$profile = new \app\models\Profile();
		$profile = $profile->get($_SESSION['profile_id']);
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['image']);
			if($filename){
				$profile->image = $filename;
				$profile->updateImage();
				header('location:/Profile/index');
			}else{
				header('location:/Profile/editAvatar', $profile);
			}
			header('location:/Profile/index');
		}else{
			$this->view('Profile/editAvatar', $profile);
		}
	}


	#[\app\filters\Login]
	public function create(){
		if(isset($_POST['action'])){
		$profile = new \app\models\Profile();
			$profile->fullname = $_POST['fullname'];
			$profile->address = $_POST['address'];
			$profile->city = $_POST['city'];
            $profile->zipcode = $_POST['zipcode'];
            $profile->state = $_POST['state'];
			$profile->user_id = $_SESSION['user_id'];
			$filename = $this->saveFile($_FILES['image']);
			if($filename){
				$profile->image = $filename;
				$_SESSION['profile_id'] = $profile->insert();
				header('location:/Profile/index');
			}else{
				header('location:/Profile/create');
			}
		}else{
			$this->view('Profile/create');
		}
    }

	public function get($profile_id) {
        $wishlist = new \app\models\Wishlist();
        $wishlist = $wishlist->get($profile_id);
        header('location:/Wishlist/profileWishlist');
    }

		

}