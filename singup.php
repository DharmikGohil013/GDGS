<?php
// Database connection
$host = 'localhost';  // Your host (usually localhost)
$user = 'root';       // Your database username (root by default in XAMPP/WAMP)
$password = 'DHARMIKgohil@2006';       // Your database password (usually empty in XAMPP/WAMP)
$dbname = 'user_db';  // The database you created in phpMyAdmin

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the users table
    $sql = "INSERT INTO users (full_name, username, email, password) VALUES (?, ?, ?, ?)";

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $full_name, $username, $email, $hashed_password);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

// Close the connection
$conn->close();
?>
