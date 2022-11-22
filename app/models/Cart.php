<?php
namespace app\models;

class Cart extends \app\core\Model{
	public function getAll(){
		$SQL = "SELECT * FROM cart";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function insert(){
		$SQL = "INSERT INTO cart(cost_price, qty, status, user_id) VALUES (:cost_price, :qty, :status, :user_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cost_price'=>$this->cost_price,
						'qty'=>$this->qty,
						'status'=>$this->status,
						'user_id'=>$this->user_id,]);
		return self::$_connection->lastInsertId();
	}

	public function get($cart_id){
		$SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}

	public function updateStatus(){
			$SQL = "UPDATE profile SET status=:staus WHERE cart_id=:cart_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['cost_price'=>$this->cost_price,
			'qty'=>$this->qty,
			'status'=>$this->status,
			'user_id'=>$this->user_id,]);
	}

	public function delete() {
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$this->cart_id]);
	}

	public function findCartForUser($user_id){
		$SQL = "SELECT * FROM cart WHERE user_id = :user_id && status = :status";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id,
						'status'=>'cart']);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetch();
	}
}