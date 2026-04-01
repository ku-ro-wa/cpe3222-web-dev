<!DOCTYPE html>
<html>
<head>
    <title>7-3 Address Book</title>
</head>
<body>

<form action="sy_73.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>

    <label for="number">Phone Number:</label><br>
    <input type="number" id="number" name="number"><br><br>
    
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br><br>
    
    <button type="submit" name="user_add">Add Member</button>
    <button type="submit" name="user_search">Search Member</button>
    <button type="submit" name="user_delete">Delete by Name</button>
</form>

<?php
session_start();

// Initialize address book in session if it doesn't exist
if (!isset($_SESSION['sy_73'])) {
    $_SESSION['sy_73'] = [];
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = $_POST["name"];
    $input_number = $_POST["number"];
    $input_address = $_POST["address"];

    // Add entry
    if (isset($_POST["user_add"]) && $input_name && $input_number && $input_address) {
        $_SESSION['sy_73'][] = [
            "name"    => $input_name,
            "number"  => $input_number,
            "address" => $input_address
        ];
        $message = "Entry added successfully!";
    }

    // Delete entry
    if (isset($_POST["user_delete"]) && $input_name) {
        foreach ($_SESSION['sy_73'] as $key => $entry) {
            if ($entry['name'] == $input_name) {
                unset($_SESSION['sy_73'][$key]);
                $message = "Entry deleted!";
            }
        }
        // Re-index array to keep it clean
        $_SESSION['sy_73'] = array_values($_SESSION['sy_73']);
    }


}
?>

<p><strong><?php echo $message; ?></strong></p>

<p>Address Book Entries:</p>
<table>
    <tr>
        <th>Name</th>
        <th>Number</th>
        <th>Address</th>
    </tr>
    <?php
    foreach ($_SESSION['sy_73'] as $entry) {
        $show = true;
        
        // SEARCH LOGIC
        // If searching, only show if a match is found
        if (isset($_POST['user_search'])) {
            $s = $_POST['name'] ?: ($_POST['number'] ?: $_POST['address']);
            if (stripos($entry['name'], $s) === false && 
                stripos($entry['number'], $s) === false && 
                stripos($entry['address'], $s) === false) {
                $show = false;
            }
        }

        if ($show) {
            $message = "Entry found!";
            echo "<tr>
                    <td>{$entry['name']}</td>
                    <td>{$entry['number']}</td>
                    <td>{$entry['address']}</td>
                  </tr>";
        }
    }
    ?>
</table>
  
<style>
    button {
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
    }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
</style>

</body>
</html>