<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'db.php';
if (!isset($conn)) {
    die('$conn is not defined. Check your database connection in db.php.');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    header("Location: ../Pages/login.html");
    try {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        echo "Query executed successfully.<br>";
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine());
    }

    if (!$stmt->execute()) {
        die("Query execution failed.");
    }
}
?>