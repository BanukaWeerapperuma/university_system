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
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Register Student</h2>
        <form action="register_student_action.php" method="POST">
            <label for="nic">NIC:</label>
            <input type="text" name="nic" required>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            <label for="address">Address:</label>
            <input type="text" name="address" required>
            <label for="tel_no">Tel. No:</label>
            <input type="text" name="tel_no" required>
            <label for="course">Course:</label>
            <input type="text" name="course" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
