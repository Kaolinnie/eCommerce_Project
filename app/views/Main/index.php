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
    <div id="subviews" class="hideSubview">

    </div>
    <div id="subviewCart" class="hideSubview">

    </div>
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
            <h2>Would you like to order some delicious food from your favourite store?</h2>
            <h3>Click here to enter your address:</h3>
            <button class="btn btn-primary" onclick="location.href='/Main/address'">Click me</button>
        <div class="cloudBox">
            <h2>Want to start a business?</h2>
            <h3>Click here to register yours now:</h3>
            <button class="btn btn-primary" onclick="location.href='/Company/index'">Click me</button>
        </div>
            <h2>Here's some random text</h2>
        </main>
        <?php $this->view('Layout/Footer');?>
    </div>
    
    <?php $this->view('Layout/Scripts');?>
    <script src="/resources/scripts/main.js"></script>
   
</body>
</html>