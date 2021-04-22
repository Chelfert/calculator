
<!DOCTYPE html>
<?php

function volume($length, $width, $height) {
    $volume = $length * $width * $height;
    echo "The volume of your container is $volume";
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
            <input type="number" value="number" name="length"><br><br>
            <label for="wid">Please enter the width</label>
            <input type="number" value="number" name="width"><br><br>
            <label for="hght">Please enter the height</label>
            <input type="number" value="number" name="height"><br><br>
            <input type="submit" value="Submit" name="Submit"><br><br>

            <br><br><br><br>
            <br><br><br><br>
            <input type="submit" value="Go Home" name="Home">
            <?php
            if (isset($_POST['Submit'])) {
                volume($_POST['length'], $_POST['width'], $_POST['height']);
            }
            ?>
            <?php
            if (isset($_POST['Home'])) {
                header("Location: index.php");
            }
            ?>
        </form> 

    </body>
</html>
