<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/companyPage.css">
    <title><?=_("Register Company")?></title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <div class="content">
            <div class="outerbox">
                <div class="boxTitle">
        <h2><?=_("Register your Company")?></h2>
        <small><?=_("Please note that this is only a request, you will receive an email confirmation when our team approves your company page!")?></small>
                </div>
        <form action='' method="post">

            <div class="form-group">
                <label for="ownerName">Company Owner</label>
                <input type="text" class="form-control" name="company_owner_name_input" id="ownerName" require>
            </div>

            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input type="text" class="form-control" name="company_name_input" id="companyName" require>
            </div>

            <div class="form-group">
                <label for="companyEmail">Company Email</label>
                <input type="email" class="form-control" name="company_email_input" id="companyEmail" require>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="companyAddress">Company Address</label>
                <input type="text" class="form-control" name="company_address_input" id="companyAddress" require>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="companySuite">Company Suite</label>
                    <input type="text" name="company_suite_input" class="form-control" id="companySuite" placeholder="Optional">
                </div>
                <div class="form-group col-md-6">
                    <label for="companyPS">Postal Code</label>
                    <input type="text" name="company_postal_code_input" class="form-control" id="companyPS" require>
                </div>
            </div>
            <input class="submitButton btn btn-secondary btn-lg btn-block" type="submit" value="Register" name="action" onsubmit="index()">
        </form>
        
        </div>
        </div>
    </main>
    <?php $this->view('Layout/Scripts'); ?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>