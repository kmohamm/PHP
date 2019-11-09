<?php
   session_start();
   include("connection.php");
   //echo $_SESSION['username'];
   $username = $_SESSION['username'];
   if(isset($_POST['username']))
   {
       $username = $_POST['username'];
       $statement = $db->prepare("UPDATE users SET username = '$username' WHERE username = '$username'");
       $statement->execute();
       $_SESSION['username'] = $username;
   }
   if(isset($_POST['email']))
   {
       $email = $_POST['email'];
       $statement = $db->prepare("UPDATE users SET email = '$email' WHERE username = '$username'");
       $statement->execute();
   }
   if(isset($_POST['passwd']))
   {
       $pass = $_POST['passwd'];
       $hashed = password_hash($password, PASSWORD_BCRYPT);
       $statement = $db->prepare("UPDATE users SET passwd = '$hashed' WHERE username = '$username'");
       $statement->execute();
   }
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="profile.css">
   <title>Profile</title>
</head>
<body>
    <div class="nav">
        <ul>
            <li class="home"><a href="homepage.php">Home</a></li>
            <li class="profile"><a class="active" href="#">Profile</a></li>
            <li class="gallery"><a href="#">Gallery</a></li>
            <li class="SnapShot"><a href="SnapShot.php">SnapShot</a></li>
            <li class="logout"><a href="sign.php">Logout</a></li>
        </ul>
        </div>

        <div class="update">
        <div class="information">
            <h1>User Information</h1>
        </div>
        <form action="register.php" method="post" autocomplete="off">
            <div class="one">
                <input type="text" name="Username" placeholder="username" id="username">
                <input type="submit" class="button1" id = "username" value="Update_username"  name="username">
            </div>
            <div class="two">
         <input type="email" name="email" placeholder="Email" id="email">
         <input type="submit" class="button2" id = "email" value="Update_email"  name="email">
        </div>
        <div class="three">
        <input type="password" name="password" placeholder="Password" id="password">
        <input type="submit" class="button3" id = "password" value="Update_password"  name="passwd">
        </div>
        <br>
        <br>
        
    </form>
    </div>

</body>
</html>