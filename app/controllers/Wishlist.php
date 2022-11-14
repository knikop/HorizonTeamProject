<?php
namespace app\controllers;

class Wishlist extends \app\core\Controller{
	public function index(){
        $wishlist = new \app\models\Wishlist();
		$wishlists = $wishlist->getAll();
		$this->view('Wishlist/index', $wishlists);
	}

    public function delete($wishlist_id){
        $wishlist = new \app\models\Wishlist();
        $wishlist->deleteAt($wishlist_id);
        header('location:/Wishlist/index');
	}

    public function remove_from_wishlist($product_id){
        
	}
}