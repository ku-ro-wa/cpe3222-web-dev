<!DOCTYPE html>
<html lang="en">
<head>
    <title>5-4 Temperature Conversion</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; font-family: sans-serif; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
        tr:nth-child(even) { background-color: #fafafa; }
        .boiling { color: #d9534f; font-weight: bold; }
        .freezing { color: #5bc0de; font-weight: bold; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Celsius to Fahrenheit Conversion</h2>
    <table>
        <thead>
            <tr>
                <th>Celsius (°C)</th>
                <th>Fahrenheit (°F)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($celsius = 0; $celsius <= 100; $celsius++) {
                
                $fahrenheit = ($celsius * 9/5) + 32;

                $styleClass = '';
                if ($celsius == 0) {
                    $styleClass = 'class="freezing"'; 
                } elseif ($celsius == 100) {
                    $styleClass = 'class="boiling"'; 
                }
                
                echo "<tr $styleClass>";
                echo "<td>{$celsius}°C</td>";
                echo "<td>" . number_format($fahrenheit, 1) . "°F</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>