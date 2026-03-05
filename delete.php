<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Delete Student - Student Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right,#8360c3, #2ebf91 );
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }

    .form-container, .result-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 600px;
      margin-bottom: 30px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
      color: #444;
      display: block;
      margin-bottom: 6px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .btn {
      width: 100%;
      background-color: #2ebf91;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #2ebf91;
    }

    @media (max-width: 600px) {
      .form-container, .result-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Delete Student Record</h2>
  <form method="POST">
    <div class="form-group">
      <label for="roll">Roll Number</label>
      <input type="text" id="roll" name="roll" placeholder="Enter Roll Number" required />
    </div>
    <div class="form-group">
      <label for="name">Student Name</label>
      <input type="text" id="name" name="name" placeholder="Enter Student Name" required />
    </div>
    <button type="submit" name="delete" class="btn">Delete Record</button>
  </form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("<div class='result-container'><p>Connection failed: " . $conn->connect_error . "</p></div>");
}

if (isset($_POST['delete'])) {
  $roll = $_POST['roll'];
  $name = $_POST['name'];

  
  $check = "SELECT * FROM record WHERE rollnumber = '$roll' AND name = '$name'";
  $check_result = $conn->query($check);

  if ($check_result && $check_result->num_rows > 0) {
    $sql = "DELETE FROM record WHERE rollnumber = '$roll' AND name = '$name'";
    if ($conn->query($sql) === TRUE) {
      echo "<div class='result-container'><p>Record deleted successfully.</p></div>";
    } else {
      echo "<div class='result-container'><p>Error deleting record: " . $conn->error . "</p></div>";
    }
  } else {
    echo "<div class='result-container'><p>No record found with provided Roll Number and Name.</p></div>";
  }
}

$conn->close();
?>

</body>
</html>
