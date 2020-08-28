<?php
include ('database.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
   $name = $_POST['newUser'];
   $mail = $_POST['newEmail'];
   $pass = md5($_POST['newPass']);
    $sql = "INSERT into profiles values(NULL,'$name','$mail','$pass')";
    $query = mysqli_query($conn,$sql);
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    if($query){
        $_SESSION['success_msg']=="Your account has been successfully registered";
        header('location:index.php');
    }
    else{
        $_SESSION['err_msg']=="Something went wrong";
        header('location:sign_up.php');
    }
}


?>
