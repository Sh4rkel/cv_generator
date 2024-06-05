<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
include '../Scripts/cv_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CV Generator</title>
    <link rel="stylesheet" href="../Style/main.css">
</head>
<body>
<header>
    <h1>CV Generator</h1>
    <nav>
        <a href="cv.html">Create CV</a>
        <a href="login.html">Login / Register</a>
        <button id="theme-switcher">Switch Theme</button>
        <?php if (isset($_SESSION['username'])): ?>
            <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
        <?php endif; ?>
    </nav>
</header>
<main>
    <h2>CV Generator</h2>
    <p>Creaza-ti propriul CV.</p>
</main>
<footer>
    <p>&copy; 2024 CV Generator. All rights reserved.</p>
</footer>
<script src="../javascript/index.js"></script>
</body>
</html>