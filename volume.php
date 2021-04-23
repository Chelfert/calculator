
<!DOCTYPE html>
<?php

function volume($length, $width, $height) {
    $volume = $length * $width * $height;
    echo "The volume of your container is $volume cubic inches";
}
function CFvolume($length, $width, $height) {
    $volume = $length * $width * $height;
    echo "The volume of your container is $volume cubic feet";
}
?>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet"> 
        <meta charset="UTF-8">
        <link rel="stylesheet" href="mystyle.css">
        <title>Volume</title>
    </head>
    <body>
        <h2>This is a calculator to find the volume of a container.</h2>
        <br>
        <form action="" method="POST">
            <label for="len">Please enter the length</label>
            <input type="number" step="0.01" value="number" name="length"><br><br>
            <label for="wid">Please enter the width</label>
            <input type="number" step="0.01" value="number" name="width"><br><br>
            <label for="hght">Please enter the height</label>
            <input type="number" step="0.01" value="number" name="height"><br><br>
            <input type="submit" value="Cubic Inches submit" name="CISubmit"><br><br>
            <input type="submit" value="Cubic Feet submit" name="CFSubmit"><br><br>

            <br><br><br>
            
            <?php
            if (isset($_POST['CISubmit'])) {
                volume($_POST['length'], $_POST['width'], $_POST['height']);
            }
            if (isset($_POST['CFSubmit'])) {
                CFvolume($_POST['length'], $_POST['width'], $_POST['height']);
            }
            ?>
            <?php
            if (isset($_POST['Home'])) {
                header("Location: index.php");
            }
            ?>
            <br><br><br><br>
            <input type="submit" value="Go Home" name="Home">
        </form> 

    </body>
</html>
