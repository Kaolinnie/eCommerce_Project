<?php 
    foreach($data as $page) {
        echo "
                <div class='gridItem' onclick='location.href=\"\/Company\/Page\/$page->page_id\"'>
                        <img class='business_img' src='/companies/logo/$page->company_logo'>
                        <h2>$page->company_name</h2>
                        <h3>$page->deliveryDetails</h3>    
                </div>
        ";
    }
?>