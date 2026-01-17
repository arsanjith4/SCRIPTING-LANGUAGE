<?php
$conn = new mysqli("localhost", "root", "", "College");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM Users 
            WHERE UserName='$UserName' AND Password='$Password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['Name'] = $row['Name'];
        header("Location: welcome.php");

    } else {
        echo "Invalid Username or Password";
        echo "<br><a href='login.html'>Go Back</a>";
    }
}

$conn->close();
?>
