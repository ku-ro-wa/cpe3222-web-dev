<!DOCTYPE html>
<html>
<head>
    <title>4-2 Basic PHP Exercise 2</title>
</head>
<body>
<?php
$var1 = "I'm a string!";
$var2 = 1;
$var3 = 0.5;
$var4 = 2;
$var5 = 1.5;

function is_even($var) 
{
    if (is_numeric($var))
    {
        if (round($var) % 2 == 0)
        {
            echo "The number: $var: " .round($var), " (rounded to integer if float) is even!"."<br>";
        }
        else 
        {
            echo "The number: $var: " .round($var), " (rounded to integer if float) is odd!"."<br>";
        }
    }
    else
    {
        echo "The variable \"$var\" is not a number!"."<br>";
    }    
}

is_even($var1);
is_even($var2);
is_even($var3);
is_even($var4);
is_even($var5);

?>    
</body>
</html>