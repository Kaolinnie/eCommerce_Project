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
        <?php 
            if(isset($_SESSION['user_id'])){
                echo "<button type='button' class='btn btn-warning' onclick=\"location.href='/Account/profile'\">Profile</button>";
                echo "<button type='button' class='btn btn-info' type='button' onclick=\"location.href='/Account/logout'\">Logout</button>";
            } 
            else {
               echo  "<button type='button' class='btn btn-light' onclick=\"location.href='/Account/login'\">Sign In</button>";
               echo  "<button type='button' class='btn btn-primary' onclick=\"location.href='/Account/register'\">Sign Up</button>";
            }
        ?>
        
    </ul>
</header>