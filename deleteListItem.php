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

// Get list ID and item ID from POST request
$listId = $_POST['list_id'];
$itemId = $_POST['item_id'];

// Prepare SQL statement to delete list item
$sql = "DELETE FROM list_items WHERE list_id='$listId' AND item='$itemId'";

if ($conn->query($sql) === TRUE) {
    echo "List item deleted successfully";
    echo $listId;
    echo $itemId;
} else {
    echo "Error deleting list item: " . $conn->error;
}

$conn->close();
?>
