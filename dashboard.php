<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="dashboard.php" class="active">Home</a>
        <a href="analytics.php">Analytics</a>
        <a href="settings.php">Settings</a>
        <a href="help.php">Help</a>
    </div>

    <!-- Main Dashboard Content -->
    <div class="dashboard-content">
        <div class="dashboard-header">Welcome to the University Dashboard</div>

        <!-- User Greeting and Actions -->
        <div class="dashboard-container">
            <h2></h2>
            <p>Logged in as: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
            <div class="action-links">
                <a href="register_student.php">Register a Student</a>
                <a href="search_student.php">Search Student</a>
                <a href="update_student.php">Update Student</a>
                <a href="delete_student.php">Delete Student</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <!-- Card Container -->
        <div class="card-container">
            <div class="card">
                <div class="card-title">Education</div>
                <div class="card-content">
                Our university focuses on high-quality education, 
                helping students gain skills needed for successful careers.
                </div>
            </div>
            <div class="card">
                <div class="card-title">Student Support</div>
                <div class="card-content">
                We offer career advice, counseling, and health services 
                to support students in every way possible.   
                </div>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Dashboard - All Rights Reserved
    </div>
</body>
</html>
