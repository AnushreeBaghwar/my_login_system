<?php
include 'database.php';
include 'session.php';
if (isset($_POST['submit'])){
    $user_id = $_SESSION['id'];
    $name = $_FILES['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];
    if($name){
        $location = "profile/$name";
        move_uploaded_file($tmp_name,$location);
        $query = mysqli_query($conn,"UPDATE profiles set user_img='$location' where id='$user_id'");
        if($query){
            $_SESSION['uploaded']="Your profile has been successfully uploaded.";
            header('location:user_profile.php');
        }
        else{
            $_SESSION['failed']="Oops! Something went wrong.Try again.";
            header('location:user_profile.php');
        }
    }
    
}

?>