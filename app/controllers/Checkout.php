<?php
namespace app\controllers;

class Checkout extends \app\core\Controller{

	public function index(){
		$this->view('Checkout/index');
	}

    public function search(){
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Product/index', $products);
	}
}