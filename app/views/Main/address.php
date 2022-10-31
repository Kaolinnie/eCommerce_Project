<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <link rel="stylesheet" href="/resources/styles/address.css">
    <title>Address</title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <form id="address-form" action="" method="get" autocomplete="off">
            <label class="full-field">
                <!-- Avoid the word "address" in id, name, or label text to avoid browser autofill from conflicting with Place Autocomplete. Star or comment bug https://crbug.com/587466 to request Chromium to honor autocomplete="off" attribute. -->
                <span class="form-label">Deliver to</span>
                <input
                        class="form-control"
                        id="ship-address"
                        name="ship-address"
                        required
                        autocomplete="off"
                />
            </label>
            <label class="full-field">
                <span class="form-label">Apartment, unit, suite, or floor #</span>
                <input id="address2" name="address2" class="form-control"/>
            </label>
            <label class="full-field">
                <span class="form-label">City</span>
                <input id="locality" name="locality" required class="form-control"/>
            </label>
            <label class="slim-field-left">
                <span class="form-label">State/Province</span>
                <input id="state" name="state" required class="form-control"/>
            </label>
            <label class="slim-field-right" for="postal_code">
                <span class="form-label">Postal code</span>
                <input id="postcode" name="postcode" required class="form-control"/>
            </label>
            <label class="full-field">
                <span class="form-label">Country/Region</span>
                <input id="country" name="country" required class="form-control"/>
            </label>
            <div class="btn-group">
                <button type="button" class="btn btn-primary my-button">Save address</button>
                <input type="reset" value="Clear form" class="btn btn-light" />
            </div>
        </form>
        <script src="/resources/scripts/address.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5GmOg26uVrPIq_S_Fq4TwkkLOiwhiMYc&libraries=places&callback=initAutocomplete" defer></script>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>