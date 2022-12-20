<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/login.css">
    <link rel="stylesheet" href="/resources/styles/background.css">
    <title><?=_("Account")?></title>
</head>
<body>
<?php $this->view('Layout/Header'); ?>

    <div class="content">
            <div class="form">
            <h2><?=_("Login")?></h2>
            <form action='' method="post">
                <input type="email" name="email_input" placeholder="Email" required><br>
                <input type="password" name="password_input"  placeholder="Password"required><br>
                <button class="submitButton btn btn-primary" type="submit" name="action"><?=_("Login")?></button><br>
                <a class="redirectLink" href="/Account/register">Don't have an account? Sign up!</a>
            </form>
            </div>
            <div class="logoForm">
            <?php
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                echo "<div class='alert alert-danger' role='alert'>
                        <span>$error</span>
                    </div>";
            } ?>
        </div>
    </div>
    <?php $this->view('Layout/Scripts');?>
    
</body>
</html>