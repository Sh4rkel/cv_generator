<?php
include 'db.php';

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");

$stmt->bind_param('s', $username);

$username = $_POST['username'];

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    header('Location: ../Pages/index.php');
    exit;
} else {
    exit;
}

$stmt->close();
$conn->close();
?>
