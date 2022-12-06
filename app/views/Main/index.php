<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <link rel="stylesheet" href="/resources/styles/companyStyles.css">
    <title><?=_("Home")?></title>
</head>
<body>
<!--    <div id="subviews" class="hideSubview">-->
<!---->
<!--    </div>-->
    <?php $this->view('Layout/Menu'); ?>

    <div id="content">
        <?php $this->view('Layout/Header'); ?>
        <main>
            <div class="business_page">
                <div class="content_box">
                    <div class="layoutGrid">  
                    <?php $this->view('Layout/PageBrief', $data); ?>
                    </div>
                </div>
            </div>
            <h2><?=_("Would you like to order some delicious food from your favourite store?")?></h2>
            <h3><?=_("Click here to enter your address")?>:</h3>
            <button class="btn btn-primary" onclick="location.href='/Main/address'"><?=_("Click me")?></button>
            <div class="cloudBox">
                <h2><?=_("Want to start a business?")?></h2>
                <h3><?=_("Click here to register yours now")?>:</h3>
                <button class="btn btn-primary" onclick="location.href='/Company/index'"><?=_("Click me")?></button>
            </div>
        </main>
        <?php $this->view('Layout/Footer');?>
    </div>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>