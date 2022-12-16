<?php
namespace app\filters;

#[\Attribute]
class address extends \app\core\AccessFilter {
    public function execute() {
        if(isset($_SESSION['deliverTo'])&&$_SESSION['deliverTo']!="") {
            return false;
        } else {
            $error=_('Address is not set, go into the left side menu to set it');
            header("location:/?error=$error");
            return true;
        }
    }
}
