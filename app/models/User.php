<?php
namespace app\models;

class User extends \app\core\Model {
    public function insert(){
        $SQL = "INSERT INTO user(email,password,first_name,last_name) VALUES (:email,:password,:first_name,:last_name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["email"=>$this->email,"password"=>$this->password,"first_name"=>$this->first_name,"last_name"=>$this->last_name]);
    }

    public function get($email){
        $SQL = "SELECT * FROM user WHERE email=:email";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["email"=>$email]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, "\app\models\User");
        return $STMT->fetch();
    }

    public function updateAddress(){
        $SQL = "UPDATE user SET user_address = :user_address, user_suite = :user_suite WHERE user_id = :user_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["user_address"=>$this->address, "user_suite"=>$this->user_suite, "user_id"=>$this->user_id]);
    }

    
}