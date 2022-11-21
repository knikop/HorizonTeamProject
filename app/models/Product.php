<?php
namespace app\models;

class Product extends \app\core\Model{
	public function getAll(){
		//get all newest first
		$SQL = "SELECT * FROM product";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function search($searchTerm){
		//get all newest first
		$SQL = "SELECT * FROM product WHERE product_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm'=>"%$searchTerm%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function get($product_id){
		$SQL = "SELECT * FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

	public function addToCart($product_id){
		$SQL = "INSERT INTO cart(product_id, , product_name, cost_price, description, image) SELECT product.";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['fullname'=>$this->fullname,
						'address'=>$this->address,
						'city'=>$this->city,
						'zipcode'=>$this->zipcode,
                        'state'=>$this->state,
						'country'=>$this->country,
						'user_id'=>$this->user_id,
                        ]);
		return self::$_connection->lastInsertId();
	}
}