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
        <div class='card-deck brief_pages'></div>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>