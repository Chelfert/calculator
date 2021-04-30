<!DOCTYPE html>
<?php

function hourlysalary($pay, $hours) {
    setlocale(LC_MONETARY, "en_US");
    //52 weeks in a year
    $weeks = 52;
    //hourly rate * hours worked * 52 weeks
    $salary = $pay * $hours * $weeks;
    echo "if you work $hours hours a week and make $$pay an hour, then your salary is $" . number_format($salary) . "<br>";
}

function bipaychecksalary($paycheck) {
    $payments = 24;
    $salary = $paycheck * $payments;
    echo "If you make $" . number_format($paycheck) . " every paycheck, then your salary is $" . number_format($salary), "<br>";
}

function mpaychecksalary($paycheck) {
    $payments = 12;
    $salary = $paycheck * $payments;
    echo "If you make $" . number_format($paycheck) . " every paycheck, then your salary is $" . number_format($salary), "<br>";
}
?>
<html>
    <head>
        <meta charset="windows-1252">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="mystyle.css">
        <title>Salary</title>
    </head>
    <body>
        <h2>This is a calculator to find an annual salary.</h2>
        <br>
        <form action="" method="POST">
            <input type="radio" id="hourly" name="hourly" value="hourly">
            <label for="hourlyrrate">Hourly rate</label><br>
            <input type="radio" id="paycheck" name="paycheck" value="paycheck">
            <label for="bPychk">Bi-weekly Paycheck</label><br>
            <input type="radio" id="monthlyPaycheck" name="monthlyPaycheck" value="monthlyPaycheck">
            <label for="mPychk">Monthly Paycheck</label><br>
            <input type="submit" value="Submit" name="Submit"><br><br>

            <br><br><br>
            <?php
            if (isset($_POST['Submit']) & (isset($_POST['hourly']))) {
                //if hourly rate is set
                echo "<form>";
                echo "<input type='number' step= '0.01' id='rate' name='rate' value='rate'>";
                echo "<label for='hourlyrate'>Hourly Rate</label><br><br>";
                echo "<input type='number' step= '0.01' id='hoursWorked' name='hoursWorked' value='hoursWorked'>";
                echo "<label for='hrsWrked'>Hours Worked</label><br><br>";
                echo "<input type='submit' value='hourlySubmit' name='hourlySubmit'><br><br>";
            }
            //call function once numbers are submitted
            if (isset($_POST['hourlySubmit'])) {
                hourlysalary($_POST['rate'], $_POST['hoursWorked']);
            }
            //if bi-weekly pay is set
            if (isset($_POST['Submit']) & (isset($_POST['paycheck']))) {
                echo "<br><br><hr><form>";
                echo "<input type='number' id='paycheck' name='paycheck' value='paycheck'>";
                echo "<label for='paycheckAmnt'>Paycheck Amount</label><br>";
                echo "<input type='submit' value='Bi-weekly Submit' name='biweeklySubmit'><br><br>";
            }
            //call function once numbers are submitted
            if (isset($_POST['biweeklySubmit'])) {
                bipaychecksalary($_POST['paycheck']);
            }
            //if monthly pay is set
            if (isset($_POST['Submit']) & (isset($_POST['monthlyPaycheck']))) {
                echo "<br><br><hr><form>";
                echo "<input type='number' id='monthlyPay' name='monthlyPay' value='monthlyPay'>";
                echo "<label for='paycheckAmnt'>Paycheck Amount</label><br>";
                echo "<input type='submit' value='Monthly Submit' name='monthlySubmit'><br><br>";
            }
            //call function once numbers are submitted
            if (isset($_POST['monthlySubmit'])) {
                mpaychecksalary($_POST['monthlyPay']);
            }

            //go home button is pressed .
            if (isset($_POST['Home'])) {
                header("Location: index.php");
            }
            ?>
            <br><br><br><br>
            <input type="submit" value="Go Home" name="Home">
        </form>
            </body>
            </html>
