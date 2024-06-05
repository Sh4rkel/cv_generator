<?php
session_start();
include 'db.php';

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param('s', $username);
$username = $_POST['username'];
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Username already taken. Please choose a different username.";
    exit;
} else {
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param('ss', $username, $password);
    $password = $_POST['password'];
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        // Set the session variable
        $_SESSION['username'] = $username;
        // Registration was successful, redirect to main page
        header('Location: ../Pages/index.php');
        exit;
    }
}

$stmt->close();
$conn->close();
?>