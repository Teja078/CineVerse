<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "almas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    echo "Values Inserted!";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $user, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Signup successful!";
            header("Location: loginpage.php");
        } else {
            echo "Error executing query: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing query: " . $conn->error;
    }
}

$conn->close();
?>
