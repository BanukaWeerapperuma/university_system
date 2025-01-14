<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Student</title>
    <!-- Link to CSS File -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include('config.php');

// Check if the form has been submitted with the GET method
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the NIC entered by the user
    $nic = $_GET['nic'];

    // Start the result container
    echo '<div class="search-result-container">';

    // SQL query to search for student by NIC
    $sql = "SELECT * FROM students WHERE nic = '$nic'";
    $result = $conn->query($sql);

    // If there are results, display them
    if ($result->num_rows > 0) {
        echo '<div class="result-card">';
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>NIC:</strong> " . $row["nic"] . "</p>";
            echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
            echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
            echo "<p><strong>Tel. No:</strong> " . $row["tel_no"] . "</p>";
            echo "<p><strong>Course:</strong> " . $row["course"] . "</p>";
        }
        echo '</div>'; // Close the result card container
    } else {
        // If no results are found, display a message
        echo "<p class='no-result'>No student found with this NIC.</p>";
    }

    // End the result container
    echo '</div>';

    // Close the database connection
    $conn->close();
}
?>

</body>
</html>
