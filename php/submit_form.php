<?php
// Enable error reporting for debugging purposes
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost:3306";
    $username = "root";
    $password = ""; // Default password is empty in XAMPP
    $dbname = "contact_form_db"; // Ensure this database exists

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<div class='message error'>Connection failed: " . $conn->connect_error . "</div>");
    }

    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO form_submissions (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Successfully inserted into database
        echo "<div class='message success'>Form Submission Received</div>";
        echo "<script>window.location.href = window.location.href.split('?')[0];</script>"; // Refresh the page after form submission
    } else {
        echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    // Close database connection
    $conn->close();

}
?>