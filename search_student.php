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
    <title>Search Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Search Student</h2>
        <form action="search_student_action.php" method="GET">
            <label for="nic">Enter NIC:</label>
            <input type="text" name="nic" required>
            <button type="submit">Search</button>
        </form>
    </div>
</body>
</html>
