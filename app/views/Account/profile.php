<!DOCTYPE html>
<html lang="en">
<head>
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
        <h1><?=_("My Profile")?></h1>
        <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName"><?=_("First name")?></label>
                <input type="text" class="form-control" name="firstName" id="firstName" value=<?= $_SESSION['firstName']??''?>>
            </div>
            <div class="form-group col-md-6">
                <label for="lastName"><?=_("Last name")?></label>
                <input type="text" class="form-control" name="lastName" id="lastName" value=<?= $_SESSION['lastName']??''?>>
            </div>
            </div>

            <div class="form-group">
                <label for="email"><?=_("Email")?></label>
                <input type="text" class="form-control" name="email" id="email" value=<?= $_SESSION['email']??''?>>
            </div>
    
            <div class="form-group">
                <label for="address"><?=_("Address")?></label>
                <input type="text" class="form-control" name="address" id="address" value="<?= $_SESSION['deliverTo']??''?>">
            </div>

            <div class="form-group">
                <label for="addressSuite"><?=_("Address 2")?></label>
                <input type="text" class="form-control" name="suite" id="addressSuite" placeholder="Apartment, studio, or floor">
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile"><?=_("Change Profile Picture")?></label>
            </div>

            <button type="submit" onclick="updateProfile()" class="btn btn-primary btn-lg btn-block"><?=_("Update Profile")?></button>
        </form>     
        <a href="/Main/index"><h3 style="text-align: center;"><?=_("Back to main page")?></h3></a>
    </div>
    </div>
   


</main>
<?php $this->view('Layout/Scripts');?>
</body>
</html>