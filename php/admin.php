<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

// Database connection parameters
$servername = "localhost:3306";
$username = "root";
$password = ""; // Default password is empty in XAMPP
$dbname = "contact_form_db"; // Ensure this database exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch submissions
if (isset($_GET['fetch'])) {
    $result = $conn->query("SELECT * FROM form_submissions");
    $submissions = array();

    while ($row = $result->fetch_assoc()) {
        $submissions[] = $row;
    }

    echo json_encode($submissions);
    exit();
}

// Delete submission
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $response = array('success' => false);

    if ($conn->query("DELETE FROM form_submissions WHERE id = $id") === TRUE) {
        $response['success'] = true;
    } else {
        $response['error'] = "Error deleting record: " . $conn->error;
    }

    echo json_encode($response);
    exit();
}

// Close database connection
$conn->close();
?>
