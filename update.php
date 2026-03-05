<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Update Student - Student Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #8360c3, #2ebf91);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      flex-direction: column;
    }

    .search-container, .result-container {
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
      background-color: #239c7c;
    }

    @media (max-width: 600px) {
      .search-container, .result-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="search-container">
  <h2>Search Student to Update</h2>
  <form method="POST">
    <div class="form-group">
      <label for="roll">Search by Roll Number</label>
      <input type="text" id="roll" name="roll" placeholder="Enter Roll Number" required />
    </div>
    <button type="submit" name="search" class="btn">Search</button>
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

if (isset($_POST['search'])) {
  $roll = $_POST['roll'];
  $sql = "SELECT * FROM record WHERE rollnumber = '$roll'";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<div class="result-container">
  <h2>Update Student Record</h2>
  <form method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <div class="form-group"><label>Name</label><input type="text" name="name" value="<?php echo $row['name']; ?>" /></div>
    <div class="form-group"><label>Father's Name</label><input type="text" name="fathername" value="<?php echo $row['fathername']; ?>" /></div>
    <div class="form-group"><label>Mother's Name</label><input type="text" name="mothername" value="<?php echo $row['mothername']; ?>" /></div>
    <div class="form-group"><label>Age</label><input type="number" name="age" value="<?php echo $row['age']; ?>" /></div>
    <div class="form-group"><label>Education</label><input type="text" name="education" value="<?php echo $row['education']; ?>" /></div>
    <div class="form-group"><label>Department</label><input type="text" name="department" value="<?php echo $row['department']; ?>" /></div>
    <div class="form-group"><label>Section</label><input type="text" name="section" value="<?php echo $row['section']; ?>" /></div>
    <div class="form-group"><label>Roll Number</label><input type="text" name="rollnumber" value="<?php echo $row['rollnumber']; ?>" readonly /></div>
    <button type="submit" name="update" class="btn">Update Record</button>
  </form>
</div>

<?php
  } else {
    echo "<div class='result-container'><p>No student found with that Roll Number.</p></div>";
  }
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $age = $_POST['age'];
  $education = $_POST['education'];
  $department = $_POST['department'];
  $section = $_POST['section'];

  $sql = "UPDATE record SET 
            name='$name', 
            fathername='$fathername', 
            mothername='$mothername', 
            age='$age', 
            education='$education', 
            department='$department', 
            section='$section'
          WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "<div class='result-container'><p>Record updated successfully.</p></div>";
  } else {
    echo "<div class='result-container'><p>Error updating record: " . $conn->error . "</p></div>";
  }
}

$conn->close();
?>

</body>
</html>
