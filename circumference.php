<?php

function calculate($radius) {
    global $circumference;
    $pi = pi();
    $circumference = 2 * $pi * $radius;
    return number_format((float) $circumference, 4, '.', '');
    echo "The circumference of the circle is $circumference";
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="mystyle.css">
        <title>Circumference</title>
    </head>
    <body>
        <h2>This is a calculator for the circumference of a circle. 
            <br>Please enter the radius in inches.
            <form action="" method="POST">
                <input type="submit" value="Submit" name="Submit">
                <input type="number" step= '0.01' value="number" name="number">
                <br><br><br>
                <?php
                if (isset($_POST['Submit'])) {
                    global $radius, $circumference;
                    $radius = $_POST['number'];
                    //$_POST['Submit'] = false;
                    echo "<br><br>";
                    $circumference = calculate($radius);
                    echo ("The circumference of your circle in inches is $circumference");
                }
                ?>

                <br><br><br><br>
                <input type="submit" value="Go Home" name="Home">
            </form> 
            <?php
            if (isset($_POST['Home'])) {
                header("Location: index.php");
            }
            ?>
    </body>
</html>
