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
    public function get($page_id) {
        $SQL = "SELECT * FROM page WHERE page_id = :page_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(["page_id"=>$page_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'\app\models\Page');
        return $STMT->fetch();
    }
}