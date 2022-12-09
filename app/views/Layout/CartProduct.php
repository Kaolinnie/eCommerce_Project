<?php
$product = new \app\models\Product();
foreach($_SESSION['cart'] as $product_id => $quantity) {
    $item = $product->getProduct($product_id);
    //var_dump($item);
    if($item) {
        echo "
            <div class='checkout_item'>
                <img src=\"\companies\product\\$item->product_image\">
                <div>
                    <span>$item->product_name</span>
                    <span>$item->product_price</span>
                    <span>$quantity</span>
                </div>
            </div>
        
        ";
        }
    }
?>

