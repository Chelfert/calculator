<?php session_start();
$selection = $_POST['option'];
/*$circumference = $_POST['circumference'];
$volume = $_POST['volume'];
$salary = $_POST['salary']
 
 */
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
        if ($selection == "circumference") {
            header("Location: circumference.php");
            //if $volume is set, then redirect to volume page
        }elseif ($selection == "volume") {
            header("Location: volume.php");
        }elseif ($selection == "salary"){
            header("Location: salary.php");
        }
        ?>
    </body>
</html>
