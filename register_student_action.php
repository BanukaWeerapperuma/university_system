<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel_no = $_POST['tel_no'];
    $course = $_POST['course'];

    // Use prepared statements to insert data into the database (to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO students (nic, name, address, tel_no, course) 
                            VALUES (?, ?, ?, ?, ?)");
    
    // Bind parameters to the SQL query
    $stmt->bind_param("sssss", $nic, $name, $address, $tel_no, $course);

    // Execute the statement and check if the insertion was successful
    if ($stmt->execute()) {
        // Redirect to the dashboard after successful registration
        header("Location: dashboard.php");
        exit();  // Don't forget to call exit to stop further execution
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
