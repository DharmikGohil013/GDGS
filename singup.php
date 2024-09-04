<?php
$servername = "localhost"; // Change if your MySQL server is on a different host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "user_db"; // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name = $_POST['name'];
$user_name = $_POST['username'];
$user_password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
$email = $_POST['email'];

// Check if username or email already exists
$sql = "SELECT id FROM users WHERE username='$user_name' OR email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            document.getElementById('error-message').style.display = 'block';
            document.getElementById('success-message').style.display = 'none';
          </script>";
} else {
    // Insert data into the database
    $sql = "INSERT INTO users (full_name, username, email, password) VALUES ('$full_name', '$user_name', '$email', '$user_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                document.getElementById('error-message').style.display = 'none';
                document.getElementById('success-message').style.display = 'block';
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
