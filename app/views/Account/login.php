<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/registerStyles.css">
    <title><?=_("Account")?></title>
</head>
<body>
<?php $this->view('Layout/Menu'); ?>
    <div id="content">
        <?php $this->view('Layout/Header'); ?>
        <main>
            <h2><?=_("Create account")?></h2>

            <form action='' method="post">
                <label><?=_("Email")?></label><input type="email" name="email_input" required>
                <label><?=_("Password")?></label><input type="password" name="password_input" required>
                <button class="submitButton btn btn-primary" type="submit" name="action"><?=_("Login")?></button>
            </form>
            <?php
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                echo "<div class='alert alert-danger' role='alert'>
                        <span>$error</span>
                    </div>";
            } ?>
        </main>
        <?php $this->view('Layout/Footer');?>
    </div>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>