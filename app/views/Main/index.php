<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <title><?=_("Home")?></title>
</head>
<body>
    <div id="content">
        <div class="extended-menu">
            <ul class="left-menu">
                <li><a class='active' href="/"><?=_("Home")?></a></li>
                <li><a href="/Main/explore"><?=_("Explore")?></a></li>
                <li><a href="/Main/faq"><?=_("FAQ")?></a></li>
            </ul>
            <ul class="right-menu">
                <li>
                    <?php
                        if(isset($_SESSION['user_id'])) echo "<a href='/Account/logout'>"._("Logout")."</a>";
                        else echo "<a href='/Account/login'>"._("Login")."</a>";
                    ?>
                </li>
            </ul>
        </div>
        <main>
            <div class="title">
                <h1><img src="/resources/images/logo.png" alt="">XXX</h1>
                <p>XXX <?=_('is here to help you get your belly satisfied without needing to step outside!')?></p>

                <br>
                <h6><?=_('Come join us in our quest to try all foods!')?></h6>
                <button class="btn btn-light" onclick="location.href='/Main/explore'"><?=_('Explore')?></button>
            </div>

            <div class="join_business">
                <h2><?=_("Want to start a business?")?></h2>
                <h3><?=_("Click here to register yours now")?>:</h3>
                <button class="btn btn-primary" onclick="location.href='/Company/index'"><?=_("Click me")?></button>
            </div>
        </main>
        <?php $this->view('Layout/Footer');?>
    </div>
    <?php
        if(isset($_GET['error'])) {
            $err = $_GET['error'];
            echo "<input type='hidden' value='$err' id='errorMessage'>";
        }
    ?>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>