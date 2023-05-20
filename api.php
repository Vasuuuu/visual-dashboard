<?php
// Database connection details
$servername = "localhost";
$username = "****";
$password = "****";
$dbname = "******";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// API endpoint to retrieve data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if a category filter is provided
    $sector = isset($_GET['sector']) ? $_GET['sector'] : '';

    // Prepare the SQL query
    $sql = "SELECT * FROM data_ ";
    if (!empty($sector)) {
        $sql .= " WHERE sector = '$sector'";
    }

    // Execute the query
    $result = $conn->query($sql);

    // Fetch the data as an associative array
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Return the data as JSON
    echo json_encode($data);
}

$conn->close();

?>
