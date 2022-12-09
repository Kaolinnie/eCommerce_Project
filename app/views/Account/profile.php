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
<?php $this->view('Layout/Menu'); ?>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <div class="squareCloudBox">
            <h2>Address</h2><br>
            <p>264-8 Boulevard Saint Francis</p><br>
            <p>Postal Code: J6J 5N6</p>
            <button type="button" class="btn btn-secondary">Change Address</button>
        </div>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>