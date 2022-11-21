<?php
namespace app\models;

class Profile extends \app\core\Model{

	#[\app\validators\NonEmpty]
	public $fullname;
	#[\app\validators\Zipcode]
	public $zipcode;

	
	public function __toString(){
		return "$this->fullname";
	}

	public function getAll(){
		$SQL = "SELECT * FROM profile";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetchAll();
	}

	public function get($profile_id){
		$SQL = "SELECT * FROM profile WHERE profile_id=:profile_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['profile_id'=>$profile_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function insert(){
		if ($this->isValid()){
		$SQL = "INSERT INTO profile(fullname, address, city, zipcode, state, country, user_id) VALUES (:fullname, :address, :city, :zipcode, :state, :country, :user_id)";
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

	public function update(){
		if ($this->isValid()){
			$SQL = "UPDATE profile SET fullname=:fullname, address=:address, city=:city, zipcode=:zipcode, state=:state, country=:country 
			WHERE profile_id=:profile_id";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['fullname'=>$this->fullname,
							'address'=>$this->address,
							'city'=>$this->city,
							'zipcode'=>$this->zipcode,
							'state'=>$this->state,
							'country'=>$this->country,
							'profile_id'=>$this->profile_id]);
	}
}

}