<?php include 'database.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-content">
    <form action="register.php" method="post">
    <h3>Sign up now</h3>
    <input type="text" class="info" name="newUser" placeholder="Enter an username" class="info">
    <br>
    <input type="email" class="info" name="newEmail" placeholder="Enter your email address" class="info">
    <br>

    <input type="password" class="info"placeholder="Enter password" name="newPass" class="info">
    <br>
    <input type="submit" class="button-panel" value="submit" name="signUp">
    </form>
    </div>





</body>
</html>
