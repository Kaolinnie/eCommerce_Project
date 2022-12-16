<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/homeStyles.css">
    <title><?=_("Register Company")?></title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <h2><?=_("Register your Company")?></h2>
        <form action='' method="post">
            <label><?=_("Owner's Name")?><input type="text" name="company_owner_name_input" required></label><br>
            <label><?=_("Company Name")?><input type="text" name="company_name_input" required></label><br>
            <label><?=_("Company Email")?><input type="text" name="company_email_input" required></label><br>
            <label><?=_("Company Address")?><input type="text" name="company_address_input" required></label><br>
            <label><?=_("Company Suite")?><input type="text" name="company_suite_input" placeholder="<?=_("(Optional)")?>"></label><br>
            <label><?=_("Postal Code")?><input type="text" name="company_postal_code_input" required></label><br>
            <input class="submitButton btn btn-primary" type="submit" value="Register" name="action" onsubmit="index()">
        </form>
        <p><?=_("Please note that this is only a request, you will receive an email confirmation when our team approves your company page!")?></p>
    </main>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>