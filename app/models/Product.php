<?php

namespace app\models;

class Product extends \app\core\Model
{
    public function getProduct($product_id){
        $SQL = "SELECT * FROM product WHERE product_id = :product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["product_id"=>$product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Product');
        return $STMT->fetch();
    }
    public function getProductPrice($product_id){
        $SQL = "SELECT product_price FROM product WHERE product_id = :product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["product_id"=>$product_id]);
        return $STMT->fetch();
    }
}