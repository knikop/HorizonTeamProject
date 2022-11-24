<?php
namespace app\models;

class User extends \app\core\Model{
	
	#[\app\validators\Email]
	public $email;

	public function __construct(){
		parent::__construct();
	}
	
	public function get($email){
		$SQL = "SELECT * FROM user WHERE email=:email";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function getProfile(){
		$SQL = "SELECT * FROM profile WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Profile');
		return $STMT->fetch();
	}

	public function insert(){
		if ($this->isValid()){
			$SQL = "INSERT INTO user(email, password_hash) VALUES (:email, :password_hash)";
			$STMT = self::$_connection->prepare($SQL);
			$STMT->execute(['email'=>$this->email,
						'password_hash'=>$this->password_hash]);
			return self::$_connection->lastInsertId();
		}
	}

	public function updatePassword(){
		$SQL = "UPDATE user SET password_hash=:password_hash WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['password_hash'=>$this->password_hash,
						'user_id'=>$this->user_id]);
	}

	public function update2fa(){
		$SQL = "UPDATE user SET secret_key=:secret_key WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['secret_key'=>$this->secret_key,
						'user_id'=>$this->user_id]);
	}
}