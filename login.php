<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "financial_hookup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            echo "Login successful. Welcome, " . htmlspecialchars($user['name']) . "!";
            // You can redirect to the user's dashboard here
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email address.";
    }

    $stmt->close();
}

$conn->close();
?>
