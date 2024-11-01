<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - The Financial Hookup</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>The Financial Hookup</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="dashboard">
            <div class="container">
                <h2>Welcome to Your Dashboard</h2>
                <p>Track your progress, complete challenges, and reach your financial goals!</p>

                <div class="progress">
                    <h3>Your Progress</h3>
                    <p>Level 3 - Credit Rookie</p>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 40%;"></div>
                    </div>
                    <p>40% to the next level</p>
                </div>

                <div class="badges">
                    <h3>Your Badges</h3>
                    <div class="badge-container">
                        <div class="badge">Credit Beginner</div>
                        <div class="badge">Budget Master</div>
                        <div class="badge">Savings Starter</div>
                    </div>
                </div>

                <div class="challenges">
                    <h3>Challenges</h3>
                    <ul>
                        <li>Complete the "Credit Basics" course - <span class="status">In Progress</span></li>
                        <li>Make your first budget - <span class="status">Not Started</span></li>
                        <li>Track expenses for 1 month - <span class="status">Not Started</span></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 The Financial Hookup. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
