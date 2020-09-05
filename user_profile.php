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
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ec430933d5.js" crossorigin="anonymous"></script>
</head>
<body style="background:url('./img/user_profile.jpg');background-repeat: no-repeat;background-size: 300%;">
    <div class="user">
        <i class="fas fa-user"></i>
        <div class="user_details">
        <h3>Name:<?php echo $data['username'];?></h3>
        <h5><i class="far fa-envelope"></i><?php echo $data['email'];?></h5>
        
        </div>
    </div>
</body>
</html>