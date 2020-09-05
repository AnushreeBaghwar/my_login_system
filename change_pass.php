<?php
include 'database.php';
include 'session.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-content">
    <form action="#" method="post">
    <h3>Change password</h3>
    <input type="password" placeholder="new password" name="newPass" class="info">
    <input type="password" name="confirmPass" placeholder="confirm your password" class="info">
    <input type="submit" name="change" class="button-panel" value="change">
    </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['change'])) {
    $newPassword = mysqli_real_escape_string($conn,md5($_POST['newPass']));
    $conPass = mysqli_real_escape_string($conn,md5($_POST['confirmPass']));
    $id = $_SESSION['id'];
    $query = mysqli_query($conn,"UPDATE profiles SET password='$conPass' where id='$id'");
    if (session_status()==PHP_SESSION_NONE) {
        session_start();
    }
    if($newPassword!==$conPass){
        echo "Password did not matched.try again.";
    }
    elseif($newPassword=="" && $conPass==""){
        echo "Password field should not be empty";
    }
    elseif($conPass=""){
        echo "confirm your password to proceed";
    }
    else{
        $_SESSION['password_changed']="Your password has been successfully changed.\nYou can login with your new password";
        header('location:index.php');
    }
}
?>