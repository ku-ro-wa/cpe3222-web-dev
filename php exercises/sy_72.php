<!DOCTYPE html>
<html>
<head>
    <title>7-2 Multiplication Table</title>
</head>
<body>

<form action="sy_72.php" method="post">
    <label for="number">Enter a number to display its multiplication table (Whole numbers only):</label><br>
    <input type="text" id="number" name="number"><br><br>
    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if ($number and $number == (int)$number) {
        echo "<h3>Multiplication Table for " . $number . ":</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo $number . " x " . $i . " = " . ($number * $i) . "<br>";
        }
    }
    else{
        echo "Please enter a valid whole number.";
    }
}
?>
  
</body>
</html>