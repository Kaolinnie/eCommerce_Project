<?php
namespace app\controllers;

class Subviews extends \app\core\Controller{
    public function addAddressView() {
        $this->view('Layout/Subviews/address');
    }
    public function openSubview(){
        if(isset($_SESSION['deliverTo'])) {
           $address = $_SESSION['deliverTo'];
           echo "<div id='changeAddress'>
           <img onclick='closeSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
           <h1>Delivery Details</h1></br>
           <h2>Current Address</h2>
           <p>$address</p>
           <h2>Change Address</h2>
           <form onsubmit='updateAddress()'>
           <label>Address</label>
           <input type='text' class='inputs' id='address_input' required></br>
           <label>Apartment</label></br> 
           <input type='text' class='inputs' id='suite_input' placeholder=' Optional'></br>
           <input class='submitButton submitAddressChange' type='submit' value='Change'>
           
           </form>
           </div>";
        } else {
            echo "<div id='changeAddress'>
            <img onclick='closeSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
            <h1>Delivery Details</h1></br>
            <h2>Current Address</h2>
            No address set
            <h2>Change Address</h2>
            <form onsubmit='updateAddress()'>
            <label>Address</label>
            <input type='text' class='inputs' id='address_input' required></br>
            <label>Apartment</label>
            <input type='text' class='inputs' id='suite_input' placeholder=' Optional'>
            <input class='submitButton submitAddressChange' type='submit' value='Change'>
            </form>
            </div>";
        }
    }
}