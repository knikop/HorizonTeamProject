<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
        $cart = new \app\models\Cart();
		$carts = $cart->getAll();
		$this->view('Product/index', $carts);
	}

    public function delete($cart_id){
        $cart = new \app\models\Cart();
        $cart->deleteAt($cart_id);
        header('location:/Cart/index');
	}

    public function remove_from_cart($product_id){
        
	}
}