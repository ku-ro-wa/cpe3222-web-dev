<!DOCTYPE html>
<html>
<head>
    <title>7-1 What' my Card Number Again?</title>
</head>
<body>

<form action="sy_71.php" method="post">
    <label for="cardNumber">Enter your credit card number:</label><br>
    <input type="text" id="cardNumber" name="cardNumber"><br><br>
    <input type="submit" value="Submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST["cardNumber"];
    if ($cardNumber) {
        $strippedNumber = preg_replace('/\D/', '', $cardNumber);

        if (strlen($strippedNumber) == 16) {
            echo "Valid card number: " . $cardNumber;
        } else {
            echo "Invalid card number. Please enter a 16-digit number.";
        }
    }
}

?>    
</body>
</html>