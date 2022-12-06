<header>
    <div id="topmenu">
        <div class="addressChangeDiv" onclick="openSubview()" type="button">
            <img class="location_icon" src="/resources/images/location.png" alt="">
            <span id='location_text'>
            <?php
            if(isset($_SESSION['deliverTo'])) {
                $address = $_SESSION['deliverTo'];
                if($address) echo $address;
                else {
                    echo "Set Address";
                }
            } else {
                echo "Set Address";
            }
            ?>
            </span>
        </div>
<!--        <a href='/' class="logo_link"><img src="/resources/images/logo.png" alt="logo"></a>-->
    </div>

</header>