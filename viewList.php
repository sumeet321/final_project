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

// Get list ID from POST request
$listId = $_POST['list_id'];

// Prepare and bind SQL statement to prevent SQL injection
$sql = "SELECT item, checked FROM list_items WHERE list_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $listId);

// Execute SQL statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Fetch list items
$listItems = array();
while ($row = $result->fetch_assoc()) {
    $listItems[] = $row;
}

// Output list items as JSON
echo json_encode($listItems);

// Close statement and connection
$stmt->close();
$conn->close();
?>
