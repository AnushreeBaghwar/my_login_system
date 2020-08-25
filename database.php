<?php

$conn=mysqli_connect('localhost','root','','user_profile');
if(mysqli_connect_error()){
    echo "connection failed:".mysqli_connnect_error();
}


?>