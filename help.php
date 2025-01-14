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
    <title>Help & Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="help-container">
        <h2>Help & Contact</h2>
        
        <p>If you have any questions or need assistance, please refer to the steps below or reach out to us through the contact details provided:</p>

        <h3>Step-by-Step Guide</h3>
        <div class="help-steps">
            <ol>
                <li><strong>Logging In:</strong> Use your username and password to log in. If you’re having trouble, ensure your credentials are correct or contact support.</li>
                
                <li><strong>Registering a New Student:</strong> Navigate to the “Student Registration” page from the dashboard. Fill in the required fields (NIC, Name, Address, Tel. No, Course) and click "Submit" to register a new student.</li>
                
                <li><strong>Viewing Student Information:</strong> Go to the “Search Student” page on the dashboard, enter the student’s ID number, and click "Search" to view their details.</li>
                
                <li><strong>Updating Student Details:</strong> In the “Update Student” section, search for a student by ID, then update the fields you want to modify. Click "Update" to save changes.</li>
                <li><strong>Deleting Student Records:</strong> In the “Delete Student” section, enter the ID of the student you wish to delete, confirm the action, and the student record will be removed.</li>
                
                <li><strong>Viewing Analytics:</strong> Navigate to the “Analytics” page, enter the student ID, and review attendance, assignments, and progress data for insights on student performance.</li>

                <li><strong>Accessing Settings:</strong> Go to “Settings” to change your account password. Enter your current password and your new password twice to confirm the change.</li>
            </ol>
        </div>

        <!-- Contact Details Section -->
        <h3>Contact Information</h3>
        <div class="contact-details">
            <p><strong>Email:</strong> support@university.com</p>
            <p><strong>Phone:</strong> +94 76 1234567</p>
            <p><strong>Address:</strong> abc University , Colombo , Sri Lanla</p>
            <p><strong>Support Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM</p>
        </div>

        <!-- Back to Dashboard Button -->
        <div class="button-container">
            <a href="dashboard.php" class="back-button">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
