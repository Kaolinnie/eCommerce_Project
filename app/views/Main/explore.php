<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/companyStyles.css">
    <link rel="stylesheet" href="/resources/styles/explore.css">
    <title><?=_("Explore")?></title>
</head>
<body>
    <?php $this->view('Layout/Menu'); ?>

    <div id="content">
        <main>
            <div class="business_page">
                <div class="content_box">
                    <div class="layoutGrid">  
                    <?php $this->view('Layout/PageBrief', $data); ?>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->view('Layout/Footer');?>
    </div>
    <?php
        if(isset($_GET['error'])) {
            $err = $_GET['error'];
            echo "<input type='hidden' value='$err' id='errorMessage'>";
        }
    ?>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>