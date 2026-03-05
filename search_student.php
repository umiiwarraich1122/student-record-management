<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Search Student - Student Management System</title>
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

    .search-container {
      background:, #8360c3, #2ebf91;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 500px;
      margin-bottom: 30px;
    }

    .search-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #444;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .search-btn {
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
    .search-btn:hover {
      background-color: #239c7c;
    }

    .result-container {
      background: white;
      padding: 20px 30px;
      border-radius: 10px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      margin-top: 10px;
    }

    .result-container h2 {
      color: #333;
      margin-bottom: 15px;
      text-align: center;
    }

    ul.student-info {
      list-style: none;
      padding: 0;
    }

    ul.student-info li {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      color: #555;
    }

    ul.student-info li strong {
      color: #222;
    }

    hr {
      border: none;
      border-top: 1px solid #ccc;
      margin: 15px 0;
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
  <h2>Search Student</h2>
  <form method="POST" action="">
    <div class="form-group">
      <label for="roll">Search by Roll Number</label>
      <input type="text" id="roll" name="roll" placeholder="Enter Roll Number" />
    </div>

    <div class="form-group">
      <label for="name">Or Search by Name</label>
      <input type="text" id="name" name="name" placeholder="Enter Student Name" />
    </div>

    <button type="submit" class="search-btn">Search</button>
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


$roll = $_POST['roll'] ?? '';
$name = $_POST['name'] ?? '';

$sql = "";
$result = null;

if (!empty($roll)) {
  $sql = "SELECT * FROM record WHERE rollnumber = '$roll'";
} elseif (!empty($name)) {
  $sql = "SELECT * FROM record WHERE name LIKE '%$name%'";
}

if ($sql) {
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    echo "<div class='result-container'>";
    echo "<h2>Student Found</h2>";

    while ($row = $result->fetch_assoc()) {
      echo "<ul class='student-info'>";
      echo "<li><strong>Name:</strong> " . $row["name"] . "</li>";
      echo "<li><strong>Father's Name:</strong> " . $row["fathername"] . "</li>";
      echo "<li><strong>Mother's Name:</strong> " . $row["mothername"] . "</li>";
      echo "<li><strong>Age:</strong> " . $row["age"] . "</li>";
      echo "<li><strong>Education:</strong> " . $row["education"] . "</li>";
      echo "<li><strong>Department:</strong> " . $row["department"] . "</li>";
      echo "<li><strong>Section:</strong> " . $row["section"] . "</li>";
      echo "<li><strong>Roll Number:</strong> " . $row["rollnumber"] . "</li>";
      echo "<li><strong>Registration ID:</strong> " . $row["id"] . "</li>";
      echo "</ul><hr>";
    }

    echo "</div>";
  } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div class='result-container'><p>No student found matching the criteria.</p></div>";
  }
}

$conn->close();
?>

</body>
</html>
