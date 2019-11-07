<?php
   session_start();
   include("connection.php");

   $old_username = $_SESSION['username'];
   if(isset($_POST['u_username']))
   {
        $username = $_POST['username'];
        echo $username;
        $statement = $db->prepare("UPDATE users SET username = '$username' WHERE username = '$old_username'");
        $statement->execute();
        $_SESSION['username'] = $username;
        echo "username updated";
   }
   if(isset($_POST['update_email']))
   {
        $email = $_POST['email'];
        $statement = $db->prepare("UPDATE users SET email = '$email' WHERE username = '$old_username'");
        $statement->execute();
        echo "email updated";
   }
   if(isset($_POST['update_pass']))
   {
        $password = $_POST['password'];
        $hashed = password_hash($password, PASSWORD_BCRYPT);
        $statement = $db->prepare("UPDATE users SET passwd = '$hashed' WHERE username = '$old_username'");
        $statement->execute();
        echo "password updated";
   }
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
<div class="nav">
      <ul>
        <li class="home"><a href="homepage.php">Home</a></li>
        <li class="profile"><a class="active"href="profile.php">Profile</a></li>
        <li class="gallery"><a href="#">Gallery</a></li>
        <li class="SnapShot"><a href="SnapShot.php">SnapShot</a></li>
        <li class="logout"><a href="sign.php">Logout</a></li>
      </ul>
    </div>
<div class = "update" align="center">
    <img class="pic" src="http://www.createmepink.com/wp-content/uploads/st/thumb-stock-illustration-sketch-instagram-modern-camera-logo.jpg">
    <div class="box" text-align="center">
        <br>

    <h3>Update Details</h3>

    <form action="profile.php" method="post" autocomplete="off">
		
    <input type="text" name="username" placeholder= "<?php echo $_SESSION['username']; ?>" id="username">
        
        <input type="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>" id="email">
		
        <div class="col"><input type="password" name="password" placeholder="Password" id="password">
        
        <input type="submit" class="button1" id="register" value="update_username" name="u_username">

       <input type="submit" class="button2" id="register" value="update_email" name="update_email">

        <input type="submit" class="button3" id="register" value="update_password" name="update_password">
    </div>
    </form>
    <br><br>
        <br><br>
    </div>
</body>


</html>