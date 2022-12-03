<?php
namespace app\models;

class Company extends \app\core\Model {
    public function insert(){
        $SQL = "INSERT INTO company(company_owner, company_name, company_email , company_address, company_suite, company_postalCode) VALUES (:company_owner,:company_name,:company_email,:company_address,:company_suite,:company_postalCode)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["company_owner"=>$this->company_owner, "company_name"=>$this->company_name, "company_email"=>$this->company_email,"company_address"=>$this->company_address, "company_suite"=>$this->company_suite,"company_postalCode"=>$this->company_postalCode]);
    }

    public function getProducts($page_id){
        $SQL = "SELECT * FROM products WHERE product_store_id = page_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["page_id"=>$page_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Page');
        return $STMT->fetch();
    }
}