<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h2>Checkout</h2>
        <form action="">
                <div class="row">
                <div class="col">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" class="form-control" value=<?= $_SESSION['firstName']?>>
                </div>
                <div class="col">
                <label for="lastName">First name</label>
                <input type="text" id="lastName" class="form-control" value=<?= $_SESSION['lastName']?>>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="<?= $_SESSION['email']?>">
            </div>

            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" value="<?= $_SESSION['deliverTo']?>">
            </div>

            <div class="form-row">
                <div class="col-7">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" class="form-control" placeholder="Card Number">
                </div>
                <div class="col">
                <label for="cardExpDate">Card Expiry</label>
                <input type="text" id="cardExpDate"class="form-control" placeholder="10/27">
                </div>
                <div class="col">
                <label for="cardCVC">Card CVC</label>
                <input type="text" id="cardCVC" class="form-control" placeholder="CVC">
                </div>
            </div>

            <button type="button" id="submitButton" class="btn btn-secondary btn-lg btn-block">Submit Order</button>
        </form>
    </div>
    </div>
</main>
<?php $this->view('Layout/Scripts');?>
</body>
</html>