<?php
namespace app\controllers;

class Cart extends \app\core\Controller{

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function index(){
        $cart = new \app\models\Cart();
        $carts = $cart->get($_SESSION['profile_id']);
        $this->view('Cart/index', $carts);
	}


    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function insert($product_id){
        $cart = new \app\models\Cart();
        $cart->profile_id = $_SESSION['profile_id'];
        $cart->product_id = $product_id;
        $cart->qty = 1;
        $cart->status = 'cart';
        $cart->insert();
        header('location:/Product/index');
	}

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function delete($cart_id) {
        $cart = new \app\models\Cart();
        $cart = $cart->getCart($cart_id);
        if($cart->profile_id == $_SESSION['profile_id']){
            $cart->delete();
		}
        header('location:/Cart/index');
    }

    public function checkout() {
        
    }
}