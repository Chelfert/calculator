<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculation</title>
    </head>
    <body>
        <h2>Please Pick a Calculator</h2>
        <form action="authenticate.php" method="POST">
            <input type="radio" id="circumference" name="circumference" value="circumference">
            <label for="Circumference">Circumference of a circle</label><br>
            <input type="radio" id="volume" name="volume" value="volume">
            <label for="volume">Volume</label><br>
            <input type="submit" value="Submit">
        </form> 
        <?php
        // put your code here
        ?>
    </body>
</html>
