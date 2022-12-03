<?php 
    foreach($data as $product) {
        echo "
                <div class='gridItem'>
                    <img class='company_product_img' src='/images/page_header_image/$product->product_image'>
                    <div style='display: flex; justify-content:space-between;'>
                        <h2>$product->product_name</h2>
                        <h2>$$product->product_price</h2>
                    </div>
                </div>
        ";
    }
?>