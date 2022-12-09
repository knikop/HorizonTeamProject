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
        $rows = $cart->getProfileProduct($_SESSION['profile_id'], $product_id);
        if ($rows == 0){
            $cart->insert();
        } else {
            $cart->increaseQty($_SESSION['profile_id'], $product_id);
        }
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

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function increaseQtyButton($cart_id) {
        $cart = new \app\models\Cart();
        $cart = $cart->getCart($cart_id);
        $cart->add();
        header('location:/Cart/index');
    }

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function decreaseQtyButton($cart_id) {
        $cart = new \app\models\Cart();
        $cart = $cart->getCart($cart_id);
        $currentQty = $cart->getProfileProductQty($cart_id);
        if ($currentQty == 1){
            header('location:/Cart/index');
        } else {
            $cart->decrease();
            header('location:/Cart/index');
        }
    }

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function checkout($sum) {
        $cart = new \app\models\Cart();
        $cart->status = 'checkout';
        $cart->updateStatus($_SESSION['profile_id']);
        $current = $cart->get($_SESSION['profile_id']);
        if ($current == null){
            header('location:/Cart/index?message=Cart is empty.');
        } else {
            $this->view('Checkout/index', $sum);
        }
        
    }
    
    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function shipped(){
        $cart = new \app\models\Cart();
        $cart->shipped($_SESSION['profile_id']);
        $cart->deleteShipped($_SESSION['profile_id']);
        header('location:/Product/index');
    }
}