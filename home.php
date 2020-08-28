<?php include 'database.php' ;
 include 'session.php';
 $sql = mysqli_query($conn, "select * from profiles where id='$session_id'")or die('error in session');
 $data = mysqli_fetch_array($sql);
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <title>Homepage</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div class="header">
 <h3>hello <?php echo $data['username'];?></h3>
 <p>Welcome to our website.</p>
 <br>
 <div class="exit">
 <p><a href="logout.php" class="logout">Log out</a></p>
 </div>
 </div>


</body>
</html>


