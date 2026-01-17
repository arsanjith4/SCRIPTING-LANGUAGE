<?php
header("Content-Type: application/json");

$host = "localhost";
$user = "root";
$pass = "";
$db = "college";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

$ccode = $_GET['ccode'];

// ✅ Table name and column name fixed
$sql = "SELECT * FROM Colleges WHERE Code = '$ccode'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["error" => "No college found with the given code"]);
}

$conn->close();
?>
