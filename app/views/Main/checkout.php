<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/background.css">
    <link rel="stylesheet" href="/resources/styles/checkout.css">
    <title><?=_("Checkout")?></title>
</head>
<body>
<?php $this->view('Layout/Header'); ?>
<main>
    <div class="alignContent">
        
    <div class="content">
    <h2><?=_('Checkout')?></h2>
        <div class="info">
            <div class="user_information">
                <form action="" method="get">
                    <div class="row">
                        <div class="col">
                            <label for="firstName"><?=_('First name')?></label>
                            <input type="text" id="firstName" name="first_name" class="form-control" value=<?= $_SESSION['firstName']??''?>>
                        </div>
                        <div class="col">
                            <label for="lastName"><?=_('Last name')?></label>
                            <input type="text" id="lastName" name="last_name" class="form-control" value=<?= $_SESSION['lastName']??''?>>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><?=_('Email address')?></label>
                        <input type="email" class="form-control" name="email_address" id="exampleFormControlInput1" value="<?= $_SESSION['email']??''?>">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress"><?=_('Address')?></label>
                        <input type="text" class="form-control" name="delivery_address" id="inputAddress" value="<?= $_SESSION['deliverTo']?>">
                    </div>

                    <div class="form-row">
                        <div class="col-7">
                            <label for="cardNumber"><?=_('Card Number')?></label>
                            <input type="text" id="cardNumber" class="form-control" placeholder="Card Number">
                        </div>
                        <div class="col">
                            <label for="cardExpDate"><?=_('Card Expiry')?></label>
                            <input type="text" id="cardExpDate" class="form-control" placeholder="10/27">
                        </div>
                        <div class="col">
                            <label for="cardCVC"><?=_('Card CVC')?></label>
                            <input type="text" id="cardCVC" class="form-control" placeholder="CVC">
                        </div>
                    </div>

                    <input type="submit" id="submitButton" name="action" class="btn btn-secondary btn-lg btn-block" value="<?=_('Submit Order')?>">
                </form>
            </div>
            <div id="productsAdded">
                <?php
                $this->view('Layout/CartProduct');
                ?>
            </div>
        </div>

    </div>
    </div>
</main>
<?php $this->view('Layout/Scripts');?>
</body>
</html>