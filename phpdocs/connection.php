<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";

$conn = new mysqli($servername, $db_username, $db_password);

$dbname = "almas";
$sql = "CREATE DATABASE $dbname";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        header("Location: homepage.html");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
$conn -> close();
?>
