<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/background.css">
    <link rel="stylesheet" href="/resources/styles/profile.css">
    <title><?=_("Profile")?></title>
</head>
<body>
<?php $this->view('Layout/Header'); ?>
<main>
    <div class="content">
    <div class="outerbox">
        <h1>My Profile</h1>
        <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" value=<?= $_SESSION['firstName']??''?>>
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" value=<?= $_SESSION['lastName']??''?>>
            </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" value=<?= $_SESSION['email']??''?>>
            </div>
    
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="<?= $_SESSION['deliverTo']??''?>">
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Change Profile Picture</label>
            </div>
        </form>     
        <a href="/Main/index"><h3 style="text-align: center;">Back to main page</h3></a>
    </div>
    </div>
   


</main>
<?php $this->view('Layout/Scripts');?>
</body>
</html>