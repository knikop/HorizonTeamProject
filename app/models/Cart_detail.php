<?php
namespace app\models;

class Cart_detail extends \app\core\Model{
	public function getForCart($cart_id){
		$SQL = "SELECT cart_detail.cart_detail_id, Product.* FROM cart_detail JOIN product ON 
		cart_detail.product_id = product.product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart_detail');
		return $STMT->fetch();
	}
	
	public function insert(){
		$SQL = "INSERT INTO cart_detail(product_name, description, cost_price) VALUES (:product_name, :description, :cost_price)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_name'=>$this->product_name,
						'description'=>$this->description,
						'cost_price'=>$this->cost_price]);
	}

	public function update(){
		$SQL = "UPDATE cart_detail SET qty=:qty, total_price=:total_price WHERE cart_detail_id=:cart_detail_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['qty'=>$this->qty,
						'total_price'=>$this->total_price,
						'cart_detail_id'=>$this->cart_detail_id]);
	}

	function delete($cart_detail_id){
		$SQL = 'DELETE FROM cart_detail_id WHERE cart_detail_id = :cart_detail_id';
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_detail_id'=>$cart_detail_id]);
	}
}