<?php
include 'database.php';
include 'session.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-content">
        <form action="#" method="post">
            <h3>Change username</h3>
            <input type="text" placeholder="new username" name="newUsername" class="info">
            <input type="submit" value="change" name="changeName" class="button-panel">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['changeName'])){
    $id = $_SESSION['id'];
    $new_name = $_POST['newUsername'];
    $query = mysqli_query($conn,"UPDATE profiles SET username='$new_name' where id ='$id'");
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    if(!$query){
        echo "something went horrible";
    }
    elseif(empty($new_name)){
        echo "Enter a name";
    }
    else{
        header('location:home.php');
    }
}
?>