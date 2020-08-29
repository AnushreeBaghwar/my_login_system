<?php
include 'database.php';
include 'session.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_id = $_SESSION['id'];
    $dob = $_POST['bday'];
    $place = $_POST['hometown'];
    $query = mysqli_query($conn,"INSERT into users_info VALUES(NULL,'$user_id','$dob','$place')");
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    if (!$query) {
         echo "added a row".mysqli_connect_error();
     }
     else{
         echo "something went wrong";
         header('location:user_profile.php');
         
     } 
 }
 ?>