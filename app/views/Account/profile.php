<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->view('Layout/HeadLinks');?>
    <link rel="stylesheet" href="/resources/styles/profile.css">
    <title>Home</title>
</head>
<body>
<?php $this->view('Layout/Menu'); ?>
    <?php $this->view('Layout/Header'); ?>
    <main>
    <h2>Account Settings</h2>
        <div class="content">
        
            <form class="form" action="">
                <table>
                    <tbody>
                        <tr>
                        <td>First name</td>
                        <td>Last name</td>
                        </tr>
                        <tr>
                            <td><input type="text" value=<?= $_SESSION['firstName']?>></td>
                            <td><input type="text" value=<?= $_SESSION['lastName']?>></td>
                        </tr>
                </tbody>
            </table>
            <label for="">Email</label><br>
            <input type="text" value="<?= $_SESSION['email']?>"><br>
            <label for="">Address</label><br>
            <input type="text" value="<?= $_SESSION['deliverTo']?>">
            <button type="submit">Update Settings</button>
            </form>
        </div>
    </main>
    <?php $this->view('Layout/Footer');?>
    <?php $this->view('Layout/Scripts');?>
    <script src="/resources/scripts/main.js"></script>
</body>
</html>