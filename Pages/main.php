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
        <?php if (isset($_SESSION['username'])): ?>
            <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
        <?php endif; ?>
    </nav>
</header>
<main>
    <h2>Welcome to CV Generator</h2>
    <p>Create professional CVs in minutes.</p>
    <?php if (isset($_SESSION['username'])): ?>
        <h3>Your CVs</h3>
    <?php endif; ?>
</main>
<footer>
    <p>&copy; 2024 CV Generator. All rights reserved.</p>
</footer>
</body>
</html>