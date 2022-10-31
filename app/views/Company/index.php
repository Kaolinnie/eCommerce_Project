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
    
            <label>Company Name</label><input type="companyName" name="company_name" required><br>
            <label>Company Email</label><input type="companyEmail" name="company_email" required><br>
            <label>Company Address</label><input type="companyAddress" name="company_address" required><br>
            <input class="submitButton btn btn-primary" type="submit" value="Register" name="action">
        </form>
    </main>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>