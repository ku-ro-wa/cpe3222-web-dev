<!DOCTYPE html>
<html>
<head>
    <title>5-3 It's a Date</title>
</head>
<body>
<?php

$i = rand(0, 9);
$today = date('l');

if ($i % 2 == 0)
    {
        echo "Your number is ". $i ."!";
        if ($today == "Tuesday" || $today == "Thursday" || $today == "Saturday")
        {
            echo " You may leave your house!";
        }
        else
        {
            echo " You may not leave your house!";
        }
    }
else if ($i % 2== 1)
    {
        echo "Your number is ". $i ."!";
        if ($today == "Monday" || $today == "Wednesday" || $today == "Friday")
        {
            echo " You may leave your house!";
        }
        else
        {
            echo " You may not leave your house!";
        }
    }
?>    
</body>
</html>