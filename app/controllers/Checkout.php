<?php

namespace app\controllers;

class Checkout extends \app\core\Controller
{
    public function addToCart($product_id) {
        array_push($_SESSION['cart'],$product_id);
        $product = new \app\models\Product();
        $product = $product->getProduct($product_id);
        $this->view('Layout/CartProduct',$product);
    }
}
