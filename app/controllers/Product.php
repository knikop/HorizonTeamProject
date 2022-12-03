<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAll(isset($_GET['sort'])? $_GET['sort']: null);
		$cart = new \app\models\Cart();
		$this->view('Product/index', $products);
	}

    public function search(){
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Product/index', $products);
	}
}