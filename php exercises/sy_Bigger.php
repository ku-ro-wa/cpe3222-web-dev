<!DOCTYPE html>
<html>
<head>
    <title>5-2 Make it Bigger</title>
</head>
<body>
<?php
$i = 1;

do {
    echo "<div style='font-size: {$i}pt;'>";
    echo "Number: $i";
    echo "</div>";

    $i++; 
} while ($i <= 30);

?>    
</body>
</html>