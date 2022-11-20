<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <title>Home</title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <h2>Would you like to order some delicious food from your favourite store?</h2>
        <h3>Click here to enter your address:</h3>
        <button class="btn btn-primary" onclick="location.href='/Main/address'">Click me</button>
        <!-- <div class='card-deck brief_pages'></div> -->
    <div class="cloudBox">
        <h2>Want to start a business?</h2>
        <h3>Click here to register yours now:</h3>
        <button class="btn btn-primary" onclick="location.href='/Company/index'">Click me</button>
    </div>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>