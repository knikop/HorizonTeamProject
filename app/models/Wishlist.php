<?php
namespace app\models;

class Wishlist extends \app\core\Model{

	public function insert(){
		$SQL = "INSERT INTO wishlist(profile_id, product_id) VALUES (:profile_id, :product_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$this->profile_id,
						'product_id'=>$this->product_id]);
	}

	public function get($profile_id){
		$SQL = "SELECT * FROM wishlist WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist');
		return $STMT->fetchAll();
	}

	public function getWishlist($wishlist_id){
		$SQL = "SELECT * FROM wishlist WHERE wishlist_id=:wishlist_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['wishlist_id'=>$wishlist_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist');
		return $STMT->fetch();
	}

	public function delete() {
		$SQL = "DELETE FROM wishlist WHERE wishlist_id=:wishlist_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['wishlist_id'=>$this->wishlist_id]);
	}
	
	public function getProfileProduct($profile_id, $product_id){
		$SQL = "SELECT * FROM wishlist WHERE profile_id=:profile_id AND product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id,
						'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Wishlist');
		return $STMT->rowCount();
	}

}