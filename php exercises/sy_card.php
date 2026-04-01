<!DOCTYPE html>
<html>
<head>
    <title>6-1 Credit Card</title>
</head>
<body>
<?php

$cardNumber = "1234 - 5678 - 9101 - 1213";
$strippedNumber = preg_replace('/\D/', '', $cardNumber);

if (strlen($strippedNumber) == 16) {
    echo "Valid card number: " . $cardNumber;
} else {
    echo "Invalid card number. Please enter a 16-digit number.";
}

?>    
</body>
</html>