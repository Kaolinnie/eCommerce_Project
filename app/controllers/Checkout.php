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
        if(isset($_GET['action'])) {
            $receipt = new \app\models\Receipt();

            $items = $_SESSION['cart'];

            //create the receipt
            $receipt->user_id = $_SESSION['user_id']??null;
            $receipt->delivery_address = $_SESSION['deliverTo']??null;
            $receipt->email_address = $this->validate_input($_GET['email_address']);
            $receipt->full_name = $this->validate_input($_GET['first_name']).' '.$this->validate_input($_GET['last_name']);
            $receipt->receipt_total = 0;
            date_default_timezone_set('Canada/Eastern');
            $receipt->purchase_datetime = date("Y-m-d H:i:s");
            $receipt->createReceipt();

            $receiptRef = $receipt->getRecentReceipt($receipt->email_address);
            var_dump($receiptRef->receipt_id);

            $product = new \app\models\Product();

            $receipt_total = 0;

            foreach($items as $id=>$quantity){
                $price = intval($product->getProductPrice($id));
                $receipt_total += $price * intval($quantity);
                $receipt->createReceiptItem($receiptRef->receipt_id,$id,$quantity);
            }

            $receiptRef->editReceiptTotal($receiptRef->receipt_id,$receipt_total);

        }else {
            $this->view('Main/checkout');
        }
    }
}
