<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "431Final_SinghSumeet";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get list ID and new name from POST request
$listId = $_POST['list_id'];
$newName = $_POST['new_name'];

// Update list name in the database
$sql = "UPDATE to_do_list SET name = '$newName' WHERE id = $listId";
if ($conn->query($sql) === TRUE) {
    echo "List name updated successfully";
} else {
    echo "Error updating list name: " . $conn->error;
}

$conn->close();
?>
