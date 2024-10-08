<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'almas';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user_data = $result->fetch_assoc();
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $user_data["id"];
        header("Location: homepage.html");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}

$conn->close();
?>

