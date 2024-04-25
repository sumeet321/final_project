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

// Get list ID, item ID, and new item from POST request
$listId = $_POST['list_id'];
$itemId = $_POST['item_id'];
$newItem = $_POST['new_item'];

// Prepare SQL statement to update list item
$sql = "UPDATE list_items SET item='$newItem' WHERE list_id='$listId' AND item='$itemId'";

if ($conn->query($sql) === TRUE) {
    echo "List item updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
