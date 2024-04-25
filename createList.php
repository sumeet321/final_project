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

// Get list name from POST request
$listName = $_POST['name'];

// Insert new list into the database
$sql = "INSERT INTO to_do_list (name) VALUES ('$listName')";
if ($conn->query($sql) === TRUE) {
    echo "List created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
