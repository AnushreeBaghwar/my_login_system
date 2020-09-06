<?php include 'database.php' ;
 include 'session.php';
 $sql = mysqli_query($conn, "select * from profiles where id='$session_id'")or die('error in session');
 $data = mysqli_fetch_array($sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://kit.fontawesome.com/ec430933d5.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
</head>
<body style="background:url('./img/user_profile.jpg');background-repeat: no-repeat;background-size: 300%;">
   
    <div class="user">
   
    <?php 
    $_SESSION['img']=$data['user_img'];
    echo "<img src='".$_SESSION['img']."'id='userPic' alt='img'/>";
    ?>
    <form action="upload.php" method="post" class="profilePic" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" >
    <input type="submit" value="upload" name="submit">
    </form>
    <div class="user_details">
    <h3>Name:<?php echo $data['username'];?></h3>
    <h5><i class="far fa-envelope"></i><?php echo $data['email'];?></h5>
    </div>
    <?php
    if(isset($_SESSION['uploaded'])){
        echo "<span>".$_SESSION['uploaded']."</span>";
        unset($_SESSION['uploaded']);
    }
    ?>
    <?php
    if(isset($_SESSION['failed'])){
        echo "<span>".$_SESSION['failed']."</span>";
        unset($_SESSION['failed']);
    }
    ?>
    </div>
</body>
</html>
