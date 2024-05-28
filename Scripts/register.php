<?php
include 'db.php';

// Assuming $conn is your mysqli connection
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

// Bind the parameters to the SQL query. 'ss' indicates that both parameters are strings.
$stmt->bind_param('ss', $username, $password);

// Assuming $username and $password are the values you want to insert
$username = $_POST['username'];
$password = $_POST['password'];
if ($stmt->affected_rows > 0) {
    // Registration was successful, redirect to main page
    header('Location: ../Pages/main.html');
    exit;
$stmt->execute();
} else {
$stmt->close();
$conn->close();
}
?>