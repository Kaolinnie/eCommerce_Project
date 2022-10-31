<?php 
    foreach($data as $page) {
        echo "
            <div class='brief_page_div card' style='max-width:20rem;min-width:20rem;'>
                <img class='card-img-top' src='/images/page_header_image/$page->page_header'>
                <div class='card-body'>
                    <h5 class='card-title'>$page->page_name</h5>
                </div>
                <div class='card-footer'>
                    <small class='text-muted'>Created: $page->date_created</small>
                </div>
            </div>
        ";
    }
?>