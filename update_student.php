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
    <title>Update Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Update Student</h2>
        <form action="update_student_action.php" method="POST">
            <label for="nic">NIC of student to update:</label>
            <input type="text" name="nic" required>
            <button type="submit">Search</button>
        </form>
    </div>
</body>
</html>
