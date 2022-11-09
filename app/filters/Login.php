<?php
namespace app\filters;
//defining the Login attribute
#[\Attribute]
class Login extends \app\core\AccessFilter{
	public function execute(){
		if(!isset($_SESSION['user_id'])){
			header('location:/User/index?error=You must be logged in to access this location.');
			return true;
		}elseif($_SESSION['secret_key']!=null){
			header('location:/User/check2fa');
			return true;
		}else
			return false;
	}
}