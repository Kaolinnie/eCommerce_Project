<?php
namespace app\models;

class Company extends \app\core\Model {
    public function insert(){
        $SQL = "INSERT INTO company(company_owner, company_name, company_email , company_address, company_suite, company_postalCode) VALUES (:company_owner,:company_name,:company_email,:company_address,:company_suite,:company_postalCode)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["company_owner"=>$this->company_owner, "company_name"=>$this->company_name, "company_email"=>$this->company_email,"company_address"=>$this->company_address, "company_suite"=>$this->company_suite,"company_postalCode"=>$this->company_postalCode]);
    }
}