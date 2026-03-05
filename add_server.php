<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "students";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $age = $_POST['age'];
  $education = $_POST['education'];
  $department = $_POST['department'];
  $section = $_POST['section'];
  $roll = $_POST['roll'];
  $reg = $_POST['reg'];

  
  $sql = "INSERT INTO record (name, fathername, mothername, age, education, department, section, rollnumber, id)
          VALUES ('$name', '$father', '$mother', '$age', '$education', '$department', '$section', '$roll', '$reg')";

  
  if ($conn->query($sql) === TRUE) {
    echo "<script>setTimeout(function() { window.location.href = 'home.php'; }, 1500);</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
  $conn->close();
}
?>
