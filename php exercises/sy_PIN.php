<!DOCTYPE html>
<html>
<head>
    <title>6-2 What's my PIN?</title>
</head>
<body>
<?php

$md5_1 = "f4552671f8909587cf485ea990207f3b";
$md5_2 = "647bba344396e7c8170902bcf2e15551";
$md5_3 = "2afe4567e1bf64d32a5527244d104cea";

for ($i = 0; $i < 1000; $i++)
    {
        if (md5($i) == $md5_1)
            {
                echo "The given hash is " . $md5_1 . "<br>";
                echo "The Resulting PIN is: " . $i . "<br>";
                echo "<br>";
            }
        if (md5($i) == $md5_2)
            {
                echo "The given hash is " . $md5_2 . "<br>";
                echo "The Resulting PIN is: " . $i . "<br>";
                echo "<br>";
            }
        if (md5($i) == $md5_3)
            {
                echo "The given hash is " . $md5_3 . "<br>";
                echo "The Resulting PIN is: " . $i . "<br>";
                echo "<br>";
            }
    }

?>    
</body>
</html>