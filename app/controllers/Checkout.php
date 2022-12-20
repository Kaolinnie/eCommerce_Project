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

    #[\app\filters\checkout]
    public function checkout() {
        if(isset($_GET['action'])) {
            $receipt = new \app\models\Receipt();

            $items = $_SESSION['cart'];

            //create the receipt
            $receipt->user_id = $_SESSION['user_id']??null;
            $receipt->delivery_address = $_SESSION['deliverTo'];
            $receipt->email_address = $this->validate_input($_GET['email_address']);
            $receipt->full_name = $this->validate_input($_GET['first_name']).' '.$this->validate_input($_GET['last_name']);
            date_default_timezone_set('Canada/Eastern');
            $receipt->purchase_datetime = date("Y-m-d H:i:s");
            $receipt_total = 0;


            $product = new \app\models\Product();

            foreach($items as $id=>$quantity){
                $price = intval($product->getProductPrice($id));
                $receipt_total += $price * intval($quantity);
            }
            $receipt->receipt_total = $receipt_total;

            $receipt->createReceipt();

            unset($_SESSION['cart']);
            $this->view('Main/thankyou');

        }else {
            $this->view('Main/checkout');
        }
    }
}
