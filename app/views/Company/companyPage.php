<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/companyStyles.css">
    <title><?=$data['page']->company_name?></title>
    <link rel="icon" href="/companies/logo/<?=$data['page']->company_logo?>">
</head>
<body>
<?php $this->view('Layout/Menu'); ?>
<div id="content">
    <main>
        <div class="companyContent">
            <div class="banner_frame">
                <img class="banner_img" src="/companies/banner/<?=$data['page']->company_banner?>" alt="">
            </div>
            <div class="business_content">
                <h1><?=$data['page']->company_name?></h1>
                <h2><?=$data['page']->deliveryDetails?></h2>
            </div>
            <div class="products">
                <h3><?=_("Products")?></h3>
                <div class="productLayoutGrid">
                    <?php $this->view('Layout/ProductBrief', $data['product']); ?>
                </div>
            </div>
        </div>
    </main>
</div>

    <?php $this->view('Layout/Scripts'); ?>
</body>
</html>