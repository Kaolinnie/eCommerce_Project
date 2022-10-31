<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/registerStyles.css">
    <title>Account</title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <?php 
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                echo "<div class='alert alert-danger' role='alert'>
                    <span>$error</span>
                </div>";
        } ?>
        <h2>Create account</h2>

        <form action='' method="post">
            <label>Email</label><input type="email" name="email_input" required>
            <label>Password</label><input type="password" name="password_input" required>
            <input class="submitButton btn btn-primary" type="submit" value="Login" name="action">
        </form>
    </main>

    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>