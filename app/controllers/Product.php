<?php
namespace app\controllers;

class Product extends \app\core\Controller{

	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAll();
		$this->view('Product/index', $products);
	}

    public function search(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$product = new \app\models\Product();
		$products = $product->search($_GET['search_term']);
		$this->view('Product/index', $product);
	}

	public function addToCart($product_id){

		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$cart = new \app\models\Cart();
			
			header('location:/Product/index');
		}
		else
			$this->view('Product/index');
	}

	public function addToWishlist($product_id){

		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$wishlist = new \app\models\Wishlist();
			
			header('location:/Wishlist/index');
		}
		else
			$this->view('Wishlist/index');
	}
}