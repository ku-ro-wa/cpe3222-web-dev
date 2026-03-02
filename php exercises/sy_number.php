<!DOCTYPE html>
<html>
<head>
    <title>4-3 Basic PHP Exercise 3</title>
</head>
<body>
<?php
echo "The function number_format Formats a number with grouped thousands and optionally decimal digits using the rounding half up rule."."<br>";
$num = 1234.5678;

echo "The number: $num"."<br>";
echo "The number formatted with 2 decimal places: ".number_format($num, 2)."<br>";
echo "The number formatted with 1 decimal place: ".number_format($num, 1)."<br>";
echo "The number formatted with 0 decimal places: ".number_format($num, 0)."<br>";

echo "The number formatted with -1 (or any negative integer prior to PHP version 8.13) decimal places: ".number_format($num, -1)."<br>";
echo "Current PHP version: " . PHP_VERSION."<br>";
echo "In PHP versions 8.13 and above selecting -1, -2, and -3 in the number_format function rounds the number to the nearest 10, 100, and 1,000 respectively."."<br>";

echo "As you can see the function also rounds the number to the nearest integer."."<br>";

?>    
</body>
</html>
	