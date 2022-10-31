<?php
namespace app\models;

class Page extends \app\core\Model {
    public function getAll() {
        $SQL = "SELECT * FROM page";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Page');
        return $STMT->fetchAll();
    }
}