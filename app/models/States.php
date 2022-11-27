<?php
namespace app\models;

class States extends \app\core\Model{

	public function search($searchTerm){
		$SQL = "SELECT * FROM product WHERE product_name LIKE :searchTerm";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['searchTerm'=>"%$searchTerm%"]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function get($fullname){
		$SQL = "SELECT * FROM states WHERE fullname=:fullname";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['fullname'=>$fullname]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\States');
		return $STMT->fetch();
	}
}