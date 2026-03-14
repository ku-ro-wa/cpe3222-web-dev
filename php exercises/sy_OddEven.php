<!DOCTYPE html>
<html>
<head>
    <title>5-1 Functions and Control Structures</title>
</head>
<body>
<?php
$odd_rows = [];
$even_rows = [];

echo "<h1>Odd and Even Numbers between 1 and 100</h1>";
echo "<table header='1' border='1' style='width: 50%; text-align: center border-collapse: collapse;'>
        <tr style='background-color: #be76b5;'>
            <th>Odd Numbers</th>
            <th>Even Numbers</th>
        </tr>";

for ($i = 2; $i < 100; $i+=2)
    {
        $odd = $i;
        $even = $i + 1;

        echo "<tr>
            <td>$$even</td>
            <td>$odd</td>
            </tr>";
    }

echo "</table>";
?>    
</body>
</html>