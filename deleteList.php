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

// Get list ID from POST request
$listId = $_POST['list_id'];

// Delete list and its items from the database
$sql = "DELETE FROM to_do_list WHERE id = $listId;
        DELETE FROM list_items WHERE list_id = $listId;";

if ($conn->multi_query($sql) === TRUE) {
    echo "List and its items deleted successfully";
} else {
    echo "Error deleting list and its items: " . $conn->error;
}

$conn->close();
?>
