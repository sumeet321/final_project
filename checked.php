<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "431Final_SinghSumeet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get list ID, item ID, and new checked status from POST request
$listId = $_POST['list_id'];
$itemId = $_POST['item_id'];
$newChecked = $_POST['new_checked'];

// Prepare SQL statement to update 'checked' column
if ($newChecked == 0) {
    $sql = "UPDATE list_items SET checked='0' WHERE list_id='$listId' AND item='$itemId'";
} else {
    $sql = "UPDATE list_items SET checked='1' WHERE list_id='$listId' AND item='$itemId'";
}

if ($conn->query($sql) === TRUE) {
    echo "Checked status updated successfully";
} else {
    echo "Error updating checked status: " . $conn->error;
}

$conn->close();
?>
