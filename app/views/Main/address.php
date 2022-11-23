<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>Address</title>
</head>
<body>
<?php $this->view('Layout/Header'); ?>
<main>
    <form action="" method="post" id="address_form" style="width:80%;">
        <div class="form-row">
            <label>
                <input class="form-control" required autocomplete="off" name="delivery_address" id="delivery_address" placeholder="Deliver to:">
            </label>
        </div>
        <div class="form-row">
            <label>
                <input class="form-control" name="aptInput" required placeholder="Apartment, unit, suite, or floor #">
            </label>
        </div>
        <div class="form-row">
            <label>
                <input class="form-control" name="cityInput" required placeholder="City">
            </label>
        </div>
        <div class="form-row">
            <div class="col">
                <label>
                    <input class="form-control" name="province" required placeholder="Province/State">
                </label>
            </div>
            <div class="col">
                <label>
                    <input class="form-control" name="postcode" required placeholder="Postal code">
                </label>
            </div>
        </div>
        <div class="form-row">
            <label>
                <input name="country" class="form-control" required placeholder="Country/Region">
            </label>
        </div>
        <button class="btn btn-primary">Save address</button>
        <input type="reset" value="Clear form">
    </form>
    <img
        class="powered-by-google"
        src="https://storage.googleapis.com/geo-devrel-public-buckets/powered_by_google_on_white.png"
        alt="Powered by Google"
    />
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly"
        defer
    ></script>
</main>
<?php $this->view('Layout/Footer');?>
<?php $this->view('Layout/Scripts');?>
<script src="/resources/scripts/main.js"></script>
</body>
</html>