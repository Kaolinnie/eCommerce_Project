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
        <img class="banner_img" src="/images/page_header_image/<?=$data->company_banner?>" alt="">
    </div>
    <div class="business_content">
        <h1><?=$data->company_name?></h1>
        <h2><?=$data->deliveryDetails?></h2>
    </div>
    <div class="products">
        <h3>Items</h3>
        <div class="">
            <!-- We need to implement the foreign key for the products here -->
        </div>
    </div>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>