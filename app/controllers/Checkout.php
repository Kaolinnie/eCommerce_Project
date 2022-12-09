<?php

namespace app\controllers;

class Checkout extends \app\core\Controller
{
    public function addToCart($product_id) {
        if(isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]++;
        } else $_SESSION['cart'][$product_id] = 1;
        $this->viewCart();
    }
    public function viewCart() {
        $this->view('Layout/CartProduct');
    }
}
