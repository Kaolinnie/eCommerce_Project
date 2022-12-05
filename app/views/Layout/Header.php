<header>
    <div id="menunav">
        <div class="profile_div">
            <a href="" class="profile_pic"><img src="/images/page_header_image/pizza.jpg" alt=""></a>
            <span class="profile_name">Welcome 
                <?php 
                    if(isset($_SESSION['firstName'])){
                        $firstname = $_SESSION['firstName'];
                        if($firstname) echo $firstname;
                    } else {
                        echo "";
                    }
                ?> 
             </span>
        </div>
        <div class="address_box" onclick="location.href=''">
            <div class="address_box_content">
            <img class="location_icon_hamburger" src="/resources/images/location.png" alt="">
            <?php
            if(isset($_SESSION['deliverTo'])) {
                $address = $_SESSION['deliverTo'];
                if($address) echo $address;
            }
           ?>
           </div>
        </div>
        <div id="account">
            <?php
            if(isset($_SESSION['user_id'])){
                echo "<button type='button' class='btn btn-warning' onclick=\"location.href='/Account/profile'\">Profile</button>";
                echo "<a href='\Account\logout'><img src='/resources/images/logout.png' alt='' style='filter:invert(100%);-webkit-filter:invert(100%);'></a>";
            }
            else {
                echo  "<button type='button' class='signIn' onclick=\"location.href='/Account/login'\">Sign In</button>";
                echo  "<button type='button' class='signUp' onclick=\"location.href='/Account/register'\">Sign Up</button>";
            }
            ?>
        </div>

    
    </div>
    <div id="topmenu">
        <div class="hamburger fixed_header">
            <span class='line line1'></span>
            <span class='line line2'></span>
            <span class='line line3'></span>
        </div>

        <div id='cartSubview' class="hideSubview">
                 <img onclick='closeCartSubview()' id='closeSubviewImg' src='/resources/images/xCloseButtonIcon.png'>
                    <div id='cartSubviewContent'>
                        <span id='cartText'> Cart </span>
                    </div>
                    <h2>Delivering to: $address</h2>
                    <h2>Your items</h2>
                    <div id='productsAdded'>
                    
                    </div>
                <button id='checkoutButton'> Checkout </button>
        </div>

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
        <a href='/' class="logo_link"><img src="/resources/images/logo.png" alt="logo"></a>
        <a type="button" class="checkout_link fixed_header"><img src="/resources/images/checkout.png" alt="checkout"  onclick="openCartSubview() "></a>
    </div>

</header>