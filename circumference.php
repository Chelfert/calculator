<?php

function calculate($radius) {
    global $circumference;
    $pi = pi();
    $circumference = 2 * $pi * $radius;
    return number_format((float)$circumference, 4, '.', '');
    echo "The circumference of the circle is $circumference";
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Circumference</title>
    </head>
    <body>
        <h2>This is a calculator for the circumference of a circle. 
            <br>Please enter the radius.
            <form action="" method="POST">
                <input type="submit" value="Submit" name="Submit">
                <input type="number" value="number" name="number">
            
            <?php
            if (isset($_POST['Submit'])) {
                global $radius, $circumference;
                $radius = $_POST['number'];
                //$_POST['Submit'] = false;
                echo "<br><hr><br>";
                $circumference = calculate($radius);
                echo ("The circumference of your circle is $circumference");
            }
            ?>
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
            <input type="submit" value="Go Home" name="Home">
           </form> 
            <?php 
                if(isset($_POST['Home'])){
                    header("Location: index.php");
                }
            ?>
    </body>
</html>
