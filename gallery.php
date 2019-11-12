<?php
include("config/setup.php");

$query = $db->query("SELECT * FROM images");
$array = $query->fetchall();
$x = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-
width, initial-scale=1.0">
    <meta http-equiv="X-UA-
    Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>
    <?php
        $x = 0;
        while ($x < count($array))
        {?>
        <a href=""><img src=<?php echo $array[$x]['image_name']?>></a>
        <?php
        $x++;
        }
    ?>
</body>
</html>