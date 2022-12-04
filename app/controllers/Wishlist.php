<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{

    
    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function index(){
        $wishlist = new \app\models\Wishlist();
        $wishlists = $wishlist->get($_SESSION['profile_id']);
        $this->view('Wishlist/index', $wishlists);
	}

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function insert($product_id){
        $wishlist = new \app\models\Wishlist();
        $wishlist->profile_id = $_SESSION['profile_id'];
        $wishlist->product_id = $product_id;
        $rows = $wishlist->getProfileProduct($_SESSION['profile_id'], $product_id);
        if ($rows == 0){
            $wishlist->insert();
        }
        header('location:/Product/index');
	}

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function delete($wishlist_id) {
        $wishlist= new \app\models\Wishlist();
        $wishlist= $wishlist->getWishlist($wishlist_id);
        if($wishlist->profile_id == $_SESSION['profile_id']){
            $wishlist->delete();
		}
        header('location:/Wishlist/index');
    }

	public function getProfileWishlist($profile_id) {
        $wishlist = new \app\models\Wishlist();
        $profile = new \app\models\Profile();
        $profiles = $profile->get($profile_id);
        $wishlists = $wishlist->get($profile_id);
        $this->view('Wishlist/profileWishlist', $wishlists, $profiles);
    }

    #[\app\filters\Login]
	#[\app\filters\Profile]
    public function insertToCart($product_id){
        $cart = new \app\models\Cart();
        $cart->profile_id = $_SESSION['profile_id'];
        $cart->product_id = $product_id;
        $cart->qty = 1;
        $cart->status = 'cart';
        $rows = $cart->getProfileProduct($_SESSION['profile_id'], $product_id);
        if ($rows == 0){
            $cart->insert();
        } else {
            header('location:/Wishlist/index');
        }
	}
}