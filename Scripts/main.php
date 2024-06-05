<?php
session_start();
include '../Scripts/cv_db.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'main';

switch ($page) {
    case 'cv':
        include '../Scripts/cv.php';
        break;
    case 'login':
        include '../Scripts/login.php';
        break;
    case 'register':
        include '../Scripts/register.php';
        break;
    default:
        if (isset($_SESSION['username'])) {
            echo "Welcome, " . $_SESSION['username'] . "!<br>";
            echo '<a href="cv.html">Create CV</a><br>';
            echo '<a href="../Scripts/login.php">Logout</a>';

            $username = $_SESSION['username'];
            $result = $conn->query("SELECT * FROM cvs WHERE username = '$username' ORDER BY created_at DESC");

            // Display the CV data
            echo '<h3>Your CVs</h3>';
            while ($row = $result->fetch_assoc()) {
                echo '<p>';
                echo 'Name: ' . $row['name'] . '<br>';
                echo 'Contact: ' . $row['contact'] . '<br>';
                echo 'Objective: ' . $row['objective'] . '<br>';
                echo 'Education: ' . $row['education'] . '<br>';
                echo 'Skills: ' . $row['skills'] . '<br>';
                echo 'Experience: ' . $row['experience'] . '<br>';
                echo 'References: ' . $row['references'] . '<br>';
                echo '</p>';
            }
        } else {
            echo "Welcome, guest!<br>";
            echo '<a href="login.html">Login</a><br>';
            echo '<a href="register.html">Register</a>';
        }
        break;
}
?>