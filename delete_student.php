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
    <title>Delete Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Delete Student</h2>
        <form action="delete_student_action.php" method="POST">
            <label for="nic">Enter NIC of student to delete:</label>
            <input type="text" name="nic" required>
            <button type="submit">Delete</button>
        </form>
    </div>
</body>
</html>
