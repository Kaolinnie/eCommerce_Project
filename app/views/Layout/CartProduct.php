<?php
$product = new \app\models\Product();
$total_checkout_price = 0;
$checkout_text = _('Checkout');

foreach($_SESSION['cart'] as $product_id => $quantity) {
    $item = $product->getProduct($product_id);
    if($item) {
        $total_checkout_price+=$item->product_price*$quantity;
        $total_price = $item->product_price * $quantity;
        echo "
            <div class='checkout_item'>
                <div class='checkout_item_text'>
                    <div class='checkout_item_top'>
                        <span>$item->product_name</span>
                        <img class='pointer' src='/resources/images/clear.png' onclick='removeFromCart($product_id)'>
                    </div>
                    <div class='checkout_item_bottom'>  
                        <span class='checkout_price'>$$total_price</span>
                        <div class='quantityDiv'>
                            <img class='pointer' src=\"/resources/images/minus.png\" onclick='removeOne($product_id)'>
                            <span id='quantityOfProduct$product_id'>$quantity</span>
                            <img class='pointer' src=\"/resources/images/plus.png\" onclick='addOne($product_id)'>
                        </div>
                    </div>

                </div>
                <img class='checkout_item_img' src=\"\companies\product\\$item->product_image\">
            </div>
        
        ";
        }
    }
echo "<div class='checkout_actions'>
    <span>Total: $$total_checkout_price</span>
    <button id='checkoutButton' class='btn btn-warning'>$checkout_text</button>
    </div>";