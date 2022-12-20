<?php
namespace app\filters;

#[\Attribute]
class checkout extends \app\core\AccessFilter {
    public function execute() {
        if(isset($_SESSION['cart'])&& (count($_SESSION['cart'])>1)) {
            return false;
        } else {
            $error=_('You have nothing in your cart!');
            header("location:/Main/explore?error=$error");
            return true;
        }
    }
}
