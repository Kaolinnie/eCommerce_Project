<div id="menunav">
    <?php $this->view('Layout/Header'); ?>
    <img src="/resources/images/logo.png" class='menunav_homebtn' onclick="location.href='/'">
    <div class="hamburger">
        <span class='line line1'></span>
        <span class='line line2'></span>
        <span class='line line3'></span>
    </div>
    <?php
        if(isset($_SESSION['user_id'])){
            $profile_pic = $_SESSION['profile_pic'];
            $welcomeText = _('Welcome');

            echo "
                <div class='profile_div'>
                    <a href='' class='profile_pic'><img src='/users/$profile_pic' alt=''></a>
                    <span class='profile_name'>$welcomeText
            ";
            if (isset($_SESSION['firstName'])) {
                $firstname = $_SESSION['firstName'];
                if ($firstname) echo "$firstname ";
            } else {
                echo '';
            }
            echo "</span></div>";
        }
    ?>
    <div class="address_box" onclick="openSubview()">
        <div class="address_box_content">

            <img class="location_icon_hamburger" src="/resources/images/location.png" alt="">
            <span id="location_text">

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
    </div>
    <div id="account">
        <?php
        if(isset($_SESSION['user_id'])){
            $profileText = _('Profile');
            echo "<button type='button' class='btn btn-warning' onclick=\"location.href='/Account/profile'\">$profileText</button>";
            echo "<a href='\Account\logout'><img src='/resources/images/logout.png' alt='' style='filter:invert(100%);-webkit-filter:invert(100%);'></a>";
        }
        else {
            $loginText = _('Login');
            $registerText = _('Register');
            echo  "<button type='button' class='signIn' onclick=\"location.href='/Account/login'\">$loginText</button>";
            echo  "<button type='button' class='signUp' onclick=\"location.href='/Account/register'\">$registerText</button>";
        }
        ?>
    </div>
</div>

<?php
    if(isset($_SESSION['cart'])) {
        $deliverTo = $_SESSION["deliverTo"];
        $cartText = _('Cart');
        $itemsText = _('Items');
        echo "
        <div id='cartSubview'>
            <a type='button' class='checkout_link'><img src='/resources/images/checkout.png' alt='checkout'></a>
        
            <div class='actions'>
                <img src='/resources/images/xCloseButtonIcon.png' onclick='closeCart()'>
                <span id='cartText'>$cartText</span>
                <img src='/resources/images/clear.png' onclick='clearCart()'>
                </div>
                <hr>
                <div class='location'>
                    <img src='/resources/images/location.png' style='width: 25px; height: 25px;' alt=''>
                    <span style='font-size:0.8em;'>$deliverTo</span>
                </div>
                <hr>
                <h4>$itemsText</h4>
                <div id='productsAdded'>";
        $this->view('Layout/CartProduct');
        echo "</div></div>";
    }
?>
