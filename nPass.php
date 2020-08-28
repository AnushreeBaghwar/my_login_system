<?php
include 'database.php';
if(session_status()==PHP_SESSION_NONE){
    session_start();
}


if(isset($_SESSION['reset_pass_email'])){
    ?>
    
    <form action="#" method="post">
    
    
    <input type="password" name="nPass" id="">
    <input type="submit" name="reset_new_pass" value="submit">
    </form>
    
    <?php


if(isset($_POST['reset_new_pass'])){
    $email=$_SESSION['reset_pass_email'];
    // var_dump($email);
    $pass = mysqli_real_escape_string($conn,md5($_POST['nPass']));
    $query = mysqli_query($conn,"UPDATE profiles SET password='$pass' where email='$email'");
    if($query){
        echo "password successfully changed";
        
    }
    else{
    echo "something went wrong";
    }
}


}
?>

