
<!DOCTYPE html>
<?php

function volume($length, $width, $height) {
    $volume = $length * $width * $height;
    echo "The volume of your container is $volume";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Volume</title>
    </head>
    <body>
        <h2>This is a calculator to find the volume of a container.</h2>
        <br>
        <form action="" method="POST">
            <label for="len">Please enter the length</label>
            <input type="number" value="number" name="length"><br>
            <label for="wid">Please enter the width</label>
            <input type="number" value="number" name="width"><br>
            <label for="hght">Please enter the height</label>
            <input type="number" value="number" name="height"><br>
            <input type="submit" value="Submit" name="Submit"><br><br>
            <?php
            if (isset($_POST['Submit'])) {
                volume($_POST['length'], $_POST['width'], $_POST['height']);
            }
            ?>
            <br><br><br><br>
            <br><br><br><br>
            <input type="submit" value="Go Home" name="Home">
                        <?php
            if (isset($_POST['Home'])) {
                header("Location: index.php");
            }
            ?>
        </form> 

    </body>
</html>
