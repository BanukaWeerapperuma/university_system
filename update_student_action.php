<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST['nic'];
    
    // Fetch current student details
    $sql = "SELECT * FROM students WHERE nic = '$nic'";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
    
    if (!$student) {
        echo "No student found with this NIC.";
    }
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
        <h2>Update Student Information</h2>
        <form action="update_student_process.php" method="POST">
            <input type="hidden" name="nic" value="<?php echo $student['nic']; ?>" required>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $student['name']; ?>" required>

            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $student['address']; ?>" required>

            <label for="tel_no">Tel. No:</label>
            <input type="text" name="tel_no" value="<?php echo $student['tel_no']; ?>" required>

            <label for="course">Course:</label>
            <input type="text" name="course" value="<?php echo $student['course']; ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
