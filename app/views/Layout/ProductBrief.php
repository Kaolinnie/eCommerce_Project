<?php 
    foreach($data as $product) {
        echo "
                <div class='gridItem'>
                    <h2>$product->product_name</h2> 
                </div>
        ";
    }
?>