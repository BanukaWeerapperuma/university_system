<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Sample data for demonstration
$sample_students = [
    '2001657823' => [
        'name' => 'Sahan Perera',
        'attendance' => 85,
        'assignments' => 78,
        'midterm' => 82,
        'final' => 89,
        'progress' => 84
    ],
    '2000543723' => [
        'name' => 'Nadeesha Wijesinghe',
        'attendance' => 92,
        'assignments' => 88,
        'midterm' => 75,
        'final' => 93,
        'progress' => 87
    ]
];

$student_data = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    if (array_key_exists($student_id, $sample_students)) {
        $student_data = $sample_students[$student_id];
    } else {
        $error_message = "No student found with ID: $student_id";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Analytics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="analytics-container">
        <h2>Student Analytics</h2>
        <p>for cheak example ID</p>
        <p>2001657823 , 2000543723 </p>
        <form method="POST" action="">
            <label for="student_id">Enter Student ID:</label>
            <input type="text" name="student_id" required>
            <button type="submit">Search</button>
        </form>

        <?php if (isset($student_data)): ?>
            <div class="student-info">
                <h3>Analysis for <?php echo $student_data['name']; ?></h3>
                <p><strong>Attendance:</strong> <?php echo $student_data['attendance']; ?>%</p>
                <p><strong>Assignments Score:</strong> <?php echo $student_data['assignments']; ?>%</p>
                <p><strong>Midterm Exam:</strong> <?php echo $student_data['midterm']; ?>%</p>
                <p><strong>Final Exam:</strong> <?php echo $student_data['final']; ?>%</p>
                <p><strong>Overall Progress:</strong> <?php echo $student_data['progress']; ?>%</p>
            </div>
        <?php elseif (isset($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <!-- Back to Dashboard button -->
        <div class="button-container">
            <a href="dashboard.php" class="back-button">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
