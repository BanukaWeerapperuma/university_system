<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST['nic'];

    $sql = "DELETE FROM students WHERE nic = '$nic'";

    if ($conn->query($sql) === TRUE) {
        echo "Student record deleted successfully";
        header("Location: dashboard.php"); // Redirect to the dashboard or student list
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
