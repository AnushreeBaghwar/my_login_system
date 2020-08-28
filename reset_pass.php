<?php 
include 'database.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$email = mysqli_real_escape_string($conn,$_POST['verifyEmail']);
$query = mysqli_query($conn,"SELECT email from profiles where email='$email'");

if(mysqli_num_rows($query)==1){
    while($row=mysqli_fetch_array($query)){
        $email=$row['email'];
        // var_dump($email);
    }
}

// var_dump($query);
elseif(mysqli_num_rows($query)<1){
echo "invalid user.enter a valid email";
}
elseif($email==""){
echo "enter your email";
}

$rand_int=mysqli_real_escape_string($conn,bin2hex(random_bytes(50)));
// var_dump($rand_int);
$sql=mysqli_query($conn,"INSERT into `reset_pass` (email,code) VAlUES ('$email','$rand_int')");
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
}
if($sql){
    $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <nikkyamresh1@gmail.com>' . "\r\n";

    // mail("nikkyamresh8@gmail.com","subject","test");
   $msg =  "click here to reset your password <a href=http://localhost/newPass.php?code=".$rand_int.">set new password</a>";
   if(mail($email,"Reset your password ",$msg,$headers)){
       echo "please check your mail";
   }else{
       echo "unable to send mail";
   }
}
else{
    echo "something went wrong";
}

?>