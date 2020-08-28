<?php 
include "database.php";
if(isset($_GET['code'])){
    $code = mysqli_real_escape_string($conn,$_GET['code']);
    $sql = mysqli_query($conn,"select * from reset_pass where code='$code'");
    $count = mysqli_num_rows($sql);
    if($count){
        $row= mysqli_fetch_array($sql);
        if(session_status()==PHP_SESSION_NONE){
            session_start();
            $_SESSION['reset_pass_email']=$row['email'];
            header('location:nPass.php');
        }
    }else{
        echo "invlid code";
    }
}

?>