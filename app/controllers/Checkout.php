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
    public function clearCart() {
        $_SESSION['cart'] = [];
    }
    public function removeFromCart($product_id) {
        unset($_SESSION['cart'][$product_id]);
        $this->view('Layout/CartProduct');
    }
    public function removeOne($product_id) {
        $_SESSION['cart'][$product_id]--;
        $this->view('Layout/CartProduct');
    }
    public function addOne($product_id) {
        $_SESSION['cart'][$product_id]++;
        $this->view('Layout/CartProduct');
    }
    public function getStore() {
        if(isset($_SESSION['storeCart'])) echo $_SESSION['storeCart'];
        else echo "null";
    }
    public function checkout() {
        $this->view('Main/checkout');
    }
}
