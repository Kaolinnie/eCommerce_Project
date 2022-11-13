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
        <h2>Register your Company</h2>
        <form action='' method="post">
            <label>Company Name<input type="text" name="company_name_input" required></label><br>
            <label>Company Email<input type="text" name="company_email_input" required></label><br>
            <label>Company Address<input type="text" name="company_address_input" required></label><br>
            <input class="submitButton btn btn-primary" type="submit" value="Register" name="action">
        </form>
    </main>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>