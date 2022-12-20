<html lang="en">
<head>
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/faqstyle.css">
    <title><?=_('FAQ')?></title>
</head>
<body>
    <?php $this->view('Layout/Header'); ?>
    <main>
        <div class="outerbox">
        <h2><?=_('What payments methods do we take?')?></h2>
        <h3><?=_('Resto-To-Door takes 3 payments methods, Debit Card, Credit Card and Cash')?></h3><br>

        <h2><?=_('Is this service really free?')?></h2>
        <h3><?=_('Yes it is! All orders are free as a part of our kickstarter!')?></h3><br>

        <h2><?=_('My order was incorrect what can I do?')?></h2>
        <h3><?=_('As a part of our service, we give credit based on any items that are wrong or missing from your order!')?></h3><br>

        <h2><?=_('Why is this a better option then other food delivery services?')?></h2>
        <h3><?=_('Everything we do is done to the utmost care, and absolutely free for our customers!')?></h3><br>

        <h2><?=_('How can I make recommendations?')?></h2>
        <h3><?=_('Unfortunately its a feature that isn\'t implemented yet! We are working on it!')?></h3>
        <br>
        <a href="/Main/index"><h3 style="text-align: center;"><?=_('Back to main page')?></h3></a>
        </div>
    </main>

    <?php $this->view('Layout/Scripts');?>
</body>
</html>