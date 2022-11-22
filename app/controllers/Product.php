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
			$cart->findUserInCart($_SESSION['user_id']);
			if($cart == null) {
				$cart = new \app\models\Cart();
				$cart->user_id = $_SESSION['user_id'];
				$cart->status = 'cart';
				$cart->cart_id = $cart->insert();
			}
			$newItem = new \app\models\Cart_detail();
			$newItem->cart_id = $cart->cart_id;
			$newItem->product_id = $product_id;
			$newItem->total_price = $cart->get($product_id)->cost_price;
			$newItem->qty = 1;
			$newItem->insert();
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