<?php 
    foreach($data as $product) {
        echo "
                <div class='productGridItem'>
                    <button class='addCart_button' onclick=\"addItemToCart($product->product_id)\">+</button>
                    <img class='company_product_img' src='/companies/product/$product->product_image'>
                    <div style='display: flex; justify-content:space-between;'>
                        <h2>$product->product_name</h2>
                        <h2>$$product->product_price</h2>
                    </div>
                </div>
        ";
    }
?>