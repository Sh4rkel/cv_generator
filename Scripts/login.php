<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            // Start a session and set the username session variable
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../Pages/main.php');
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this username.";
    }
}
?>