<?php
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection failed!");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $pasword = $_POST['pasword'] ?? '';

    if (empty($email) || empty($pasword)) {
        die("Both fields are required.");
    }

    $sql = "SELECT * FROM signup WHERE email='$email' AND pasword='$pasword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      
     
        echo "<script>setTimeout(function() { window.location.href = 'home.php'; }, 1500);</script>";
    } else {
        echo "❌ Invalid email or password.";
    }
}
?>
