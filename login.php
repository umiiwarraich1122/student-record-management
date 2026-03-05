<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";          
$db_name = "login";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Database connection failed!");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $name     = $_POST['name'] ?? '';
    $gmail    = $_POST['gmail'] ?? '';
    $u_name   = $_POST['username'] ?? '';
    $pasword  = $_POST['pasword'] ?? '';

    
    if (empty($name) || empty($gmail) || empty($u_name) || empty($pasword)) {
        die("All fields are required.");
    }

    
    $sql = "INSERT INTO `signup` (`name`, `email`, `username`, `pasword`) 
            VALUES ('$name', '$gmail', '$u_name', '$pasword')";

    $results = mysqli_query($conn, $sql);

    if ($results) {
        echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 1500);</script>";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>