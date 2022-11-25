<?php
namespace app\controllers;

class Subviews extends \app\core\Controller{
    public function openSubview(){
        if(isset($_SESSION['deliverTo'])) {
           $address = $_SESSION['deliverTo'];
           echo "<div id='changeAddress'>
           <img onclick='closeSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
           <h1>Delivery Details</h1></br>
           <h2>Current Address</h2>
           <p>$address</p>
           <h2>Change Address for Order</h2>
           <form>
           <label>Address</label>
           <input type='text' class='inputs' id='address_input' required></br>
           <label>Apartment</label>
           <input type='text' class='inputs' id='suite_input' placeholder=' Optional'>
           <input class='submitButton submitAddressChange' type='button' onclick='updateAddress()' value='Change'>
           </form>
           </div>";
        } else {
            echo "<div id='changeAddress'>
            <img onclick='closeSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
            <h1>Delivery Details</h1></br>
            <h2>Current Address</h2>
        
            <h2>Change Address for Order</h2>
            <form>
            <label>Address</label>
            <input type='text' class='inputs' id='address_input' required></br>
            <label>Apartment</label>
            <input type='text' class='inputs' id='suite_input' placeholder=' Optional'>
            <input class='submitButton submitAddressChange' type='button' onclick='updateAddress' value='Change'>
            </form>
            </div>";
        }
    }
}