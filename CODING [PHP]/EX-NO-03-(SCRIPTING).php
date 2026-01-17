<?php
// Create a connection to the MySQL database
$conn = new mysqli("localhost", "root", "", "college");

// Check for any errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg_no = $_POST['reg_no'];  // Get registration number from the form

    // Query the database for the student with the given registration number
    $sql = "SELECT * FROM student WHERE reg_no = '$reg_no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the student data from the database
        $row = $result->fetch_assoc();

        // Display the student's details
        echo "<h2>Student Result</h2>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Subject 1: " . $row['M1'] . "<br>";
        echo "Subject 2: " . $row['M2'] . "<br>";
        echo "Subject 3: " . $row['M3'] . "<br>";
        echo "Subject 4: " . $row['M4'] . "<br>";
        echo "Subject 5: " . $row['M5'] . "<br>";

        // Calculate the total and average marks
        $total = $row['M1'] + $row['M2'] + $row['M3'] + $row['M4'] + $row['M5'];
        $average = $total / 5;

        echo "Total Marks: " . $total . "<br>";
        echo "Average Marks: " . number_format($average, 2) . "<br>";
    } else {
        echo "No student found with the given registration number.";
    }
}

// Close the database connection
$conn->close();
?>