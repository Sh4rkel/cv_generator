<?php
include 'db.php';

// Assuming $conn is your mysqli connection
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");

// Bind the parameter to the SQL query. 's' indicates that the parameter is a string.
$stmt->bind_param('s', $username);

// Assuming $username is the value you want to check
$username = $_POST['username'];

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    header('Location: ../Pages/index.php');
    exit;
} else {
    // User does not exist
}

$stmt->close();
$conn->close();
?>