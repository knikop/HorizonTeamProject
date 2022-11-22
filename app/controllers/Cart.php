<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	public function index(){
        $cart = new \app\models\Cart();
		$carts = $cart->getForUser([$_SESSION['user_id']]);
		$this->view('Cart/index', $carts);
	}

    public function delete($cart_id){
        $cart = new \app\models\Cart();
        if ($cart->user_id != $_SESSION['user_id']) {
            header('location:/Product/index');
            return;
        }
        $cart->deleteAt($cart_id);
        header('location:/Cart/index');
	}

    public function remove_from_cart($product_id){
        
	}
}