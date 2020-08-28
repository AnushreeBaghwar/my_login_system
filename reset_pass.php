<?php 
include 'database.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
$email=mysqli_real_escape_string($conn,$_POST['verifyEmail']);
$query=mysqli_query($conn,"SELECT email from profiles where email='$email'");
var_dump($query);
if(mysqli_num_rows($query)<1){
echo "invalid user.enter a valid email";
}
elseif($email==""){
echo "enter your email";
}
}
// $rand_int=rand(100000,600000);
// $sql=mysqli_query($conn,"INSERT into reset-password(user_mail,otp) values('$email','$rand_int')");

// if(!$sql){
//     echo "something went wrong".mysqli_connect_error();
// }
?>