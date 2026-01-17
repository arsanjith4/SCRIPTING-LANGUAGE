<?php
session_start();

if (!isset($_SESSION['Name'])) {
    header("Location: login.html");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome</h2>

<p>Student Name: <?php echo $_SESSION['Name']; ?></p>

<p>
<?php
echo "You have successfully logged in. Welcome " . $_SESSION['Name'];
?>
</p>

</body>
</html>
