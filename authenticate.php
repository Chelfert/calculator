<?php session_start();

$circumference = $_POST['circumference'];
$volume = $_POST['volume'];
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Authenticate</title>
    </head>
    <body>
        <?php
        //if $circumference is set, then redirect to circumference page
        if ($circumference == true) {
            header("Location: circumference.php");
            //if $volume is set, then redirect to volume page
        }elseif ($volume == true) {
            header("Location: volume.php");
        }
        ?>
    </body>
</html>
