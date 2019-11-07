<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="SnapShot.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>SnapShot</title>
</head>
<body class="news">
    <header>
        <div class="nav">
            <ul>
                <li class="home"><a href="homepage.php">Home</a></li>
                <li class="profile"><a href="profile.php">Profile</a></li>
                <li class="gallery"><a href="#">Gallery</a></li>
                <li class="SnapShot"><a class="active"href="#">SnapShot</a></li>
                <li class="logout"><a href="sign.php">Logout</a></li>
            </ul>
        </div>
        <script src="script.js"></script>
        <div id="newImages">
            <div>
                <video id="player">Video is loading...</video>
			</div>
			<div >
                <div >
                        <input type="button" value="Take the Shot" id="capture-btn">
                    </div>

				<canvas name="image" id="canvas" width="320px" height="240px">Canvas Still Loading</canvas>
				<h3><canvas name="image" id="player">Canvas still loading</canvas></h3>
			</div>
  </header>
</body>
<html>
