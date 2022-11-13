<?php
namespace app\models;

class Company extends \app\core\Model {
    public function insert(){
        $SQL = "INSERT INTO company(company_name, company_email , company_address) VALUES (:company_name,:company_email,:company_address)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["company_name"=>$this->company_name,"company_email"=>$this->company_email,"company_address"=>$this->company_address]);
    }
}