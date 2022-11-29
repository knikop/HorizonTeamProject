<?php
namespace app\models;

class Cart extends \app\core\Model{
    var $qty;
    var $status;

	public function insert(){
		$SQL = "INSERT INTO cart(qty, status, profile_id, product_id) VALUES (:qty, :status, :profile_id, :product_id)
		ON DUPLICATE KEY UPDATE qty=:qty+ WHERE profile_id = :profile_id";
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


	public function delete() {
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
	}
	
	public function updateStatus(){
			$SQL = "UPDATE cart SET status=:status WHERE cart_id=:cart_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['cost_price'=>$this->cost_price,
			'qty'=>$this->qty,
			'status'=>$this->status]);
	}

	public function reduceQty(){
		$SQL = "UPDATE cart SET qty=:qty-1 WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'cart_id'=>$this->cart_id]);
	}

	public function increaseQty(){
		$SQL = "UPDATE cart SET qty=:qty+1 WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'cart_id'=>$this->cart_id]);
	}
}