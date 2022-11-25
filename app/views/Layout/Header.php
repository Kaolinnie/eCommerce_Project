<header>
    <div id="menunav">
        <div class="profile_div">
            <a href="" class="profile_pic"><img src="/images/page_header_image/pizza.jpg" alt=""></a>
            <span class="profile_name">Welcome, Kaolin</span>
        </div>
        <div class="address_box">
            <img class="location_icon" src="/resources/images/location.png" alt="">
            <span class="road">264 Boulevard Saint-Francis</span>
            <span class="city">Chateauguay</span>
            <span class="province">Quebec</span>
        </div>
        <div id="account">
            <?php
            if(isset($_SESSION['user_id'])){
                echo "<button type='button' class='btn btn-warning' onclick=\"location.href='/Account/profile'\">Profile</button>";
                echo "<a href='\Account\logout'><img src='/resources/images/logout.png' alt='' style='filter:invert(100%);-webkit-filter:invert(100%);'></a>";
            }
            else {
                echo  "<button type='button' class='btn btn-light signIn' onclick=\"location.href='/Account/login'\">Sign In</button>";
                echo  "<button type='button' class='btn btn-primary signUp' onclick=\"location.href='/Account/register'\">Sign Up</button>";
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
        <div class="addressChangeDiv" onclick="openSubview()">
            <img class="location_icon" src="/resources/images/location.png" alt="">
            Change Address
        </div>
        <a href='/' class="logo_link"><img src="/resources/images/logo.png" alt="logo"></a>
        <a href='#' class="checkout_link fixed_header"><img src="/resources/images/checkout.png" alt="checkout"></a>
    </div>

</header>