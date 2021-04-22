<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="mystyle.css">
        <title>Calculation</title>
    </head>
    <body>
        <h2>Please Pick a Calculator</h2>
        <form action="authenticate.php" method="POST">
            <input type="radio" id="circumference" name="option" value="circumference">
            <label for="Circumference">Circumference of a circle</label><br><br>
            <input type="radio" id="volume" name="option" value="volume">
            <label for="volume">Volume</label><br><br>
            <input type="radio" id="salary" name="option" value="salary">
            <label for="volume">Salary</label><br><br>
            <input type="submit" value="Submit">
        </form> 
        <?php
        // put your code here
        ?>
    </body>
</html>
