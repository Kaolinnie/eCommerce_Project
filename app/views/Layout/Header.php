<header>
    <a href='/' class="headerLogo"><img src="/resources/images/figma.svg" alt="" id="logo"></a>
    <ul id="main_nav_links">
        <!-- <li class="main_nav_link">
            <a href="/">
                <img src="/resources/images/home.png" alt="">
            </a>
        </li>
        <li class="main_nav_link">
            <a href="#">
                <img src="/resources/images/search.png" alt="">
            </a>
        </li>
        <li class="main_nav_link">
            <a href="#">
                <img src="/resources/images/about.png" alt="">
            </a>
        </li>
        <li class="main_nav_link">
            <a href="/Account">
                <img src="/resources/images/profile.png" alt="">
            </a>
        </li> -->

        
    </ul>
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


        <a href="#" class="logout_link"><img src="/resources/images/logout.png" alt="" style="filter:invert(100%);-webkit-filter:invert(100%);"></a>
    </div>
    <div id="topmenu">
        <div class="hamburger fixed_header">
            <span class='line line1'></span>
            <span class='line line2'></span>
            <span class='line line3'></span>
        </div>
        <a href='/' class="logo_link"><img src="/resources/images/logo.png" alt="logo"></a>
        <a href='#' class="checkout_link fixed_header"><img src="/resources/images/checkout.png" alt="checkout"></a>
    </div>
    <div id="account">
        <?php
        if(isset($_SESSION['user_id'])){
            echo "<button type='button' class='btn btn-warning' onclick=\"location.href='/Account/profile'\">Profile</button>";
            echo "<button type='button' class='btn btn-info' onclick=\"location.href='/Account/logout'\">Logout</button>";
        }
        else {
            echo  "<button type='button' class='btn btn-light' onclick=\"location.href='/Account/login'\">Sign In</button>";
            echo  "<button type='button' class='btn btn-primary' onclick=\"location.href='/Account/register'\">Sign Up</button>";
        }
        ?>
    </div>
</header>