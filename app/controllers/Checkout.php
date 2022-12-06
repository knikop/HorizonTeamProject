<?php
namespace app\controllers;

class Checkout extends \app\core\Controller{

	public function index(){
		$this->view('Checkout/index');
	}

}