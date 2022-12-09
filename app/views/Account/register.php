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
    <div class="content">
    <main>
        <div class="form">
        <?php 
            if(isset($_GET['error'])) {
                $error = $_GET['error'];
                echo "<div class='alert alert-danger' role='alert'>
                    <span>$error</span>
                </div>";
        } ?>
        <h2>Create account</h2>

        <form action='' method="post">
            <input type="email" name="email_input" placeholder="Email" required>
            <input type="password" name="password_input" placeholder="Password" required>
            <input type="password" name="confirm_password_input" placeholder="Confirm Password" required>
            <input type="text" name="first_name_input"  placeholder="First name"required>
            <input type="text" name="last_name_input" placeholder="Last name" required>
            <input class="submitButton btn btn-primary" type="submit" value="Register" name="action"><br>
            <a class="redirectLink" href="/Account/login">Have an account already? Login here!</a>
        </form>
    </main>
    </div>
    </div>
    <?php $this->view('Layout/Scripts');?>
</body>
</html>