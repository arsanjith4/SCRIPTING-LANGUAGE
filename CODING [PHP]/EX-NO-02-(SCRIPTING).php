<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting biodata
    $name = htmlspecialchars($_POST['name']);
    $age  = (int) $_POST['age'];
    // Collecting marks and processing them
    $marks = $_POST['marks'];
    $total = array_sum($marks);
    $average = $total / count($marks);
    // Output the result
    echo "<h2>Student Biodata</h2>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Total Marks: " . $total . "<br>";
    echo "Average Marks: " . number_format($average, 2) . "<br>";
} else {
    echo "Invalid request method.";
}
?>
