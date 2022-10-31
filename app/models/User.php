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
}