<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'database.php';
if(session_status()==PHP_SESSION_NONE){
    session_start();
}

if(isset($_SESSION['reset_pass_email'])){
    ?>
    <form action="#" class="form-content" method="post">
    <h3>Reset your password here:</h3>
    <input type="password" class="info" placeholder="New password" name="nPass" id=""><br>
    <br>
    <input type="password" class="info" placeholder="Re-enter password" name="cPass"><br>
    <br>
    <br>
    <input type="submit" class="button-panel" name="reset_new_pass" value="confirm">
    </form>
    <?php
    if(isset($_POST['reset_new_pass'])){
        $email = $_SESSION['reset_pass_email'];
        $pass = $_POST['nPass'];
        $cpass = $_POST['cPass'];
        if($pass!==$cpass){
            echo "Password did not matched.Try again.";
        }
        else{
            $new_pass = mysqli_real_escape_string($conn,md5($pass));
            $query = mysqli_query($conn,"UPDATE profiles SET password='$new_pass' where email='$email'");
            if($query){
                $_SESSION['password_set']="Your password has been successfully updated.You can login now";
                header('location:index.php');
            }
            else{
                echo "Something went wrong";
            }
        } 
    }
}
?>
  
</body>
</html>




