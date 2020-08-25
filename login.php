<?php
include 'database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
$user_mail=$_POST['mail'];
$user_pass=md5($_POST['pass']);

$query=mysqli_query($conn,"SELECT * from `profiles` where(`email`='$user_mail' and `password`='$user_pass')");
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
	$array=mysqli_fetch_array($query);
// 	if(!$array){
// die('error:'.mysqli_connect_error());
// 	}

 


	$num_row=mysqli_num_rows($query);
	var_dump($user_pass);
	if($num_row!==0){
		$_SESSION['id']=$array['id'];
		header('location:home.php');
	}
	else{
		echo "Incorrect Email/password.Try again:".mysqli_connect_error();

	}
}
    
  ?>
  
