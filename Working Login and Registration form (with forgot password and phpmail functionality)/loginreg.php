<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group_20";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $is_log = true;
$message = "";

// Check the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check the reg form
    if (isset($_POST['register'])) {
        // vzat datu is formi
        $email = $_POST['email'];
        $name = $_POST['username'];
        $password = $_POST['password'];

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL
        $sql = "INSERT INTO userinf (email, name, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $email, $name, $hashed_password);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header("Location: /webs.php");
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else { // if login submit
        $name = $_POST['username'];
        $password = $_POST['password'];

        // Prepare SQL
        $sql = "SELECT id, name, password FROM userinf WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['username'] = $row['name'];
                $_SESSION['user_id'] = $row['id'];
                header("Location: /webs.php");
            } else {
                header("Location: /websf.php");
            }
        } else {
            header("Location: /websf.php");
        }

        $stmt->close();
    }
}

?>
