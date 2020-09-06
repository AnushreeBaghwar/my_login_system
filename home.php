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
 <script src="https://kit.fontawesome.com/ec430933d5.js" crossorigin="anonymous"></script>
 </head>
 <body>
 <div class="mainheader">
 <a href="#" class="links">HOME</a>
 <a href="user_profile.php" class="links"">PROFILE</a>
 <a href="settings.php" class="links">SETTINGS</a>
 </div>
 <div class="exit">
 <p><a href="logout.php" class="logout">Log out</a></p>
 </div>
 </body>
 </html>

