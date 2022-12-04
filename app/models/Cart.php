<?php
namespace app\models;

class Cart extends \app\core\Model{
    var $qty;
    var $status;

	public function insert(){
		$SQL = "INSERT INTO cart(qty, status, profile_id, product_id) VALUES (:qty, :status, :profile_id, :product_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'status'=>$this->status,
						'profile_id'=>$this->profile_id,
						'product_id'=>$this->product_id]);
	}

	public function get($profile_id){
		$SQL = "SELECT * FROM cart WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function getCart($cart_id){
		$SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function getProfileProductQty($cart_id){
		$SQL = "SELECT qty FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchColumn();
	}

	public function getProfileProduct($profile_id, $product_id){
		$SQL = "SELECT * FROM cart WHERE profile_id=:profile_id AND product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id,
						'product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->rowCount();
	}

	public function delete() {
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
	}
	
	public function updateStatus($profile_id){
			$SQL = "UPDATE cart SET status=:status WHERE profile_id=:profile_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['status'=>$this->status,
							'profile_id'=>$profile_id]);
	}
	
	public function add(){
		$SQL = "UPDATE cart SET qty=:qty+1 WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'cart_id'=>$this->cart_id]);
	}

	public function decrease(){
		$SQL = "UPDATE cart SET qty=:qty-1 WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'cart_id'=>$this->cart_id]);
	}

	public function increaseQty($profile_id, $product_id){
		$SQL = "UPDATE cart SET qty=qty+:qty WHERE profile_id=:profile_id AND product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'profile_id'=>$profile_id,
						'product_id'=>$product_id]);
	}
}