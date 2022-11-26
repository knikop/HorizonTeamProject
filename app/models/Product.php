<?php
namespace app\models;

class Product extends \app\core\Model{

	public function __construct(){
		parent::__construct();
	}
	
	public function getAll($sortValue){
		$SQL = "SELECT * FROM product";
		if (isset($sortValue)) {
			if ($sortValue == 'asc'){
			$SQL = "SELECT * FROM product ORDER BY cost_price ASC";
		} else if ($sortValue == 'desc'){
			$SQL = "SELECT * FROM product ORDER BY cost_price DESC";
		}
		} 
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function search($searchTerm){
		$SQL = "SELECT * FROM product WHERE product_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm'=>'%' . $searchTerm . '%']);
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
}