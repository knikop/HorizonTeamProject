<?php
namespace app\models;

class Cart extends \app\core\Model{
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
		$SQL = "SELECT * FROM cart WHERE product_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm'=>"%$searchTerm%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
		return $STMT->fetchAll();
	}

	public function get($product_id){
		$SQL = "SELECT * FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetch();
	}

    public function insert(){
			$SQL = "INSERT INTO cart(product_id, product_name, cost_price, total_price, description, image)
            VALUES (:product_id, :product_name, :cost_price, :total_price, :description, :image)";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['product_id'=>$this->product_id,
						'product_name'=>$this->product_name,
                        'cost_price'=>$this->cost_price,
                        'total_price'=>$this->total_price,
                        'description'=>$this->description,
                        'image'=>$this->image]);
			return self::$_connection->lastInsertId();
	}
}