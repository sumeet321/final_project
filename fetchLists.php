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

// Default sorting options
$sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'name'; // Default to name
$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'ASC';

// Validate sort_by parameter to prevent SQL injection
$allowed_sort_fields = array('name', 'created_at'); // Allowed fields to sort by
if (!in_array($sort_by, $allowed_sort_fields)) {
    $sort_by = 'name'; // Default to name if invalid sort field is provided
}

// Fetch lists from the database with sorting
$sql = "SELECT id, name FROM to_do_list ORDER BY $sort_by $sort_order";
$result = $conn->query($sql);

$lists = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $lists[] = $row;
    }
}

echo json_encode($lists);

$conn->close();
?>
