<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$success_message = '';
$error_message = '';

// Handle password update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Retrieve the current password from database
    $username = $_SESSION['username'];
    $result = mysqli_query($conn, "SELECT password FROM users WHERE username='$username'");
    $user = mysqli_fetch_assoc($result);

    if (password_verify($current_password, $user['password'])) {
        if ($new_password === $confirm_password) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE users SET password='$hashed_password' WHERE username='$username'");
            $success_message = "Password updated successfully.";
        } else {
            $error_message = "New passwords do not match.";
        }
    } else {
        $error_message = "Current password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="settings-container">
        <h2>Settings</h2>

        <?php if ($success_message): ?>
            <p class="success"><?php echo $success_message; ?></p>
        <?php elseif ($error_message): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <!-- Change Password Form -->
        <h3>Change Password</h3>
        <form method="POST" action="">
            <label for="current_password">Current Password:</label>
            <input type="password" name="current_password" required>

            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required>

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" name="confirm_password" required>

            <button type="submit" name="update_password">Update Password</button>
        </form>

        <!-- Logout Button -->
        <div class="button-container">
            <a href="logout.php" class="logout-button">Log Out</a>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="button-container">
            <a href="dashboard.php" class="back-button">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
