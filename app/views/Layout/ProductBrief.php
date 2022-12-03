<?php 
    foreach($data as $product) {
        echo "
                <div class='gridItem'>
                    <img class='company_product_img' src='/images/page_header_image/$product->product_image'>
                    <h2>$product->product_name</h2> 
                </div>
        ";
    }
?>