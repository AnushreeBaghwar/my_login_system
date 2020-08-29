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
 <div class="header">
 <h3>hello <?php echo $data['username'];?></h3>
 <p>Welcome to our website.</p>
 <i class="fas fa-user"></i>
 <form action="user_info.php" method="post">
 <input type="date" name="bday" id="dob">
 <br>
 <label for="hometown">City/Town</label>
 <input type="text" name="hometown" id="place">
 <input type="submit" value="update">
 </form>
 <div class="exit">
 <p><a href="logout.php" class="logout">Log out</a></p>
 </div>
 </div>


 

</body>
</html>

