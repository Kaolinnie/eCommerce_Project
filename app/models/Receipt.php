<?php

namespace app\models;

class Receipt extends \app\core\Model
{
    #[\app\validators\Email]
    #[\app\validators\Not_Empty]
    public $email_address;

    #[\app\validators\Not_Empty]
    public $delivery_address;

    #[\app\validators\No_Future]
    public $purchase_datetime;

    public function createReceipt() {
        $SQL = "INSERT INTO receipt(user_id,receipt_total,delivery_address,email_address,full_name,purchase_datetime) VALUES (:user_id,:receipt_total,:delivery_address,:email_address,:full_name,:purchase_datetime)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["user_id"=>$this->user_id,"receipt_total"=>$this->receipt_total,"delivery_address"=>$this->delivery_address,"email_address"=>$this->email_address,"full_name"=>$this->full_name,"purchase_datetime"=>$this->purchase_datetime]);
    }
    public function addItemToReceipt() {
        $SQL = "INSERT INTO receipt_item(receipt_id,product_id,product_quantity) VALUES (:receipt_id,:product_id,:product_quantity)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["receipt_id"=>$this->receipt_id,"product_id"=>$this->product_id,"product_quantity"=>$this->product_quantity]);
    }

    public function getRecentReceipt($email_address){
        $SQL = "SELECT * FROM receipt WHERE email_address = :email_address order by purchase_datetime LIMIT 1";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["email_address"=>$email_address]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Receipt');
        return $STMT->fetch();
    }
    public function getAllReceipts($email_address){
        $SQL = "SELECT * FROM receipt WHERE email_address = :email_address";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["email_address"=>$email_address]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Receipt');
        return $STMT->fetch();
    }
    public function editReceiptTotal($receipt_id,$receipt_total) {
        $SQL = "UPDATE receipt SET receipt_total=:receipt_total WHERE receipt_id=:receipt_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["receipt_id"=>$receipt_id,"receipt_total"=>$receipt_total]);
    }
    public function createReceiptItem($receipt_id,$product_id,$product_quantity){
        $SQL = "INSERT INTO receipt_item(receipt_id,product_id,product_quantity) VALUES (:receipt_id,:product_id,:product_quantity)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["receipt_id"=>$receipt_id,"product_id"=>$product_id,"product_quantity"=>$product_quantity]);
    }





























}