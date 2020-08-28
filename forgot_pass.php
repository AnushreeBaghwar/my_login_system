<?php include 'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-content">
    <form action="reset_pass.php" method="post">
    <?php
    if(isset($_SESSION['no_user_found'])){
        echo "<span class='err'>".$_SESSION['no_user_found']."</span>";
        unset($_SESSION['no_user_found']);
    }
    elseif(isset($_SESSION['empty_email'])){
        echo "<span class='err'>".$_SESSION['empty_email']."</span>";
        unset($_SESSION['empty_email']);
    }
    elseif(isset($_SESSION['err_mail'])){
        echo "<span class='err'>".$_SESSION['err_mail']."</span>";
        unset($_SESSION['err_mail']);
    }
    ?>
    

    <h3>Enter your email address</h3>
    <input type="email" class="info" name="verifyEmail" placeholder="user@gmail.com" id=""><br>
    <br>
    <input type="submit" class="button-panel" name="Submit" value="Submit">
    </form>
    </div>
</body>
</html>

