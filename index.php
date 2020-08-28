<?php session_start(); ?>
<?php include ('database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="form-content">


<form class="login-form" action="login.php" method="post">
<?php
if(isset($_SESSION['success_msg'])){
    echo "<span>".$_SESSION['success_msg']."</span>";
    unset($_SESSION['success_msg']);

}
elseif(isset($_SESSION['err_msg'])){
    echo "<span>".$_SESSION['err_msg']."</span>";
    unset($_SESSION['err_msg']);
}
?>
<h3>login here</h3>

<input  type="email" placeholder="user@gmail.com" class="info" name="mail">

<div class="info"><input class="info" type="password" placeholder="password" name="pass">
</div>

<br>
<input type="submit" class="button-panel" value="login" name="login">

</form>


<p>New member?<a href="sign_up.php" id="signup">sign up now</a></p>
<p>Forgot password? <a href="forgot_pass.php">Enter here</a></p>




</div>
  




</body>
</html>