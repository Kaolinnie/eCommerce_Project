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
    <div class="banner_frame">
        <img class="banner_img" src="/images/page_header_image/mcdonaldsbanner.jpeg" alt="">
    </div>
    <div class="business_content">
        <h1>McDonald's</h1>
        <h2>10–25 min • $4.49 Delivery Fee + $2-4 Service Fee</h2>
    </div>
    <div class="products">
        <div class="eggmcmuffin">
            <img class="product_img" src="/images/page_header_image/eggmcmuffin.jpeg" alt="">
            <h2>Trio Œuf McMuffin [450.0 Cal] <br>$8.27</h2>
        </div>
    </div>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>