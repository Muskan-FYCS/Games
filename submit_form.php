<?php
$host = "localhost";
$dbname = "games";   // Replace with your database name
$username = "root";       // Default for XAMPP
$password = "";           // Default for XAMPP

// Create DB connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize input
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// Insert into DB
$sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: thankyou.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
