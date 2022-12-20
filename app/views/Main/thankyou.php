<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/faqstyle.css">
    <title><?=_("Thank you")?></title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <div class="outerbox">
            <h1><?=_('Thank you for ordering!')?></h1>
            <a href="/Main/index"><h3 style="text-align: center;"><?=_('Back to main page')?></h3></a>
        </div>
    </main>

    <?php $this->view('Layout/Scripts');?>
</body>
</html>