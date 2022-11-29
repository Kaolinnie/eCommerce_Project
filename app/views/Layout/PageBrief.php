<?php 
    foreach($data as $page) {
        echo "
                <div class='gridItem' onclick='location.href=\"\/Company\/redirectMcdonald/\"'>
                        <img class='business_img' src='images/page_header_image/$page->company_logo'>
                        <h2>$page->company_name</h2>
                        <h3>$page->deliveryDetails</h3>    
                </div>
        ";
    }
?>