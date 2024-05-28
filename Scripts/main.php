<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'main';

switch ($page) {
    case 'cv':
        include 'Pages/cv.php';
        break;
    case 'login':
        include 'Pages/login.php';
        break;
    case 'register':
        include 'Pages/register.php';
        break;
    default:
        if (isset($_SESSION['username'])) {
            echo "Welcome, " . $_SESSION['username'] . "!<br>";
            echo '<a href="cv.html">Create CV</a><br>';
            echo '<a href="scripts/logout.php">Logout</a>';
        } else {
            include 'Pages/main.php';
        }
        break;
}
?>