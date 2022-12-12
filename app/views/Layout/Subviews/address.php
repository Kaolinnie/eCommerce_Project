<div id='addAddressView'>
    <img onclick='closeSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
    <h1>Delivery Details</h1></br>

    <h2>Add Address for Order</h2>
    <form onsubmit='updateAddress()'>
        <label>Address</label>
        <input type='text' class='inputs' id='address_input' required></br>
        <label>Apartment</label>
        <input type='text' class='inputs' id='suite_input' placeholder=' Optional'>
        <input class='submitButton submitAddressChange' type='submit' value='Change'>
    </form>
</div>