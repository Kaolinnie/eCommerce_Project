<div id="menunav">
    <img src="/resources/images/logo.png" class='menunav_homebtn' onclick="location.href='/'">
    <div class="hamburger">
        <span class='line line1'></span>
        <span class='line line2'></span>
        <span class='line line3'></span>
    </div>
    <div class="profile_div">
        <a href="" class="profile_pic"><img src="/users/<?=$_SESSION['profile_pic']?>" alt=""></a>
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
        <button type='button' class='signUp' onclick="location.href='/Account/terminate'">Terminate</button>
    </div>
</div>

<div id='cartSubview'>
    <a type="button" class="checkout_link"><img src="/resources/images/checkout.png" alt="checkout"></a>

    <div class="actions">
        <img src='/resources/images/xCloseButtonIcon.png' onclick="closeCart()">
        <span id='cartText'><?=_("Cart")?></span>
        <img src='/resources/images/clear.png' onclick="clearCart()">
    </div>
    <hr>
    <div class="location">
        <img src="/resources/images/location.png" style='width: 25px; height: 25px;' alt="">
        <span style="font-size:0.8em;"><?= $_SESSION['deliverTo'] ?? "Nowhere" ?></span>
    </div>
    <hr>
    <h4><?=_("Items")?></h4>
    <div id="productsAdded">
        <?php
            $this->view('Layout/CartProduct');
        ?>
    </div>

</div>