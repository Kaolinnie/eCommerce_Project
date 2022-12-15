<?php
namespace app\filters;

#[\Attribute]
class address extends \app\core\AccessFilter {
    public function execute() {
        if(isset($_SESSION['deliverTo'])&&$_SESSION['deliverTo']!="") {
            return false;
        } else {
            header('location:/Account/address');
            return true;
        }
    }
}
