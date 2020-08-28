<?php 
include 'database.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$email = mysqli_real_escape_string($conn,$_POST['verifyEmail']);
$query = mysqli_query($conn,"SELECT email from profiles where email='$email'");

if(mysqli_num_rows($query)==1){
    while($row = mysqli_fetch_array($query)){
        $email = $row['email'];
    }
}
elseif(mysqli_num_rows($query)<1){
    $_SESSION['no_user_found'] = "Sorry,No user found registered with this email.Enter a valid email address";
    header('location:forget_pass.php');
}
elseif($email==""){
    $_SESSION['empty_email'] = "This field should not be empty";
    header('location:forget_pass.php');

}

$rand_int = mysqli_real_escape_string($conn,bin2hex(random_bytes(50)));
$sql=mysqli_query($conn,"INSERT into `reset_pass` (email,code) VAlUES ('$email','$rand_int')");

if(session_status()==PHP_SESSION_NONE){
    session_start();
}
}

if($sql){
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <nikkyamresh1@gmail.com>' . "\r\n";
    $msg =  "click here to reset your password <a href=http://localhost/newPass.php?code=".$rand_int.">set new password</a>";
    
    
    if(mail($email,"Reset your password ",$msg,$headers)){
       echo "please check your mail";
    }
    else{
        $_SESSION['err_mail'] = "There was an error sending mail.Try again";
        header('location:forget_pass.php');
}
}

?>