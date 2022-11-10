<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	public function index(){
		$publication = new \app\models\Product();
		$publications = $publication->getAll();
		$this->view('Product/index', $publications);
	}

    public function search(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Product/index', $product);
	}
}