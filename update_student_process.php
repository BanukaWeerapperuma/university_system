<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel_no = $_POST['tel_no'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name = '$name', address = '$address', tel_no = '$tel_no', course = '$course' WHERE nic = '$nic'";

    if ($conn->query($sql) === TRUE) {
        echo "Student details updated successfully.";
        header("Location: dashboard.php"); // Redirect to the dashboard or student list
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
