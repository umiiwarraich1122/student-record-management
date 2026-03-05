

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System - Home</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #8360c3, #2ebf91);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background: rgba(255, 255, 255, 0.95);
      width: 90%;
      max-width: 700px;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    .header {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 30px;
      color: #333;
    }

    .button-row {
      display: flex;
      justify-content: space-around;
      margin-bottom: 25px;
      flex-wrap: wrap;
      gap: 20px;
    }

    .button {
      background-color: #2ebf91;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      min-width: 120px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #239c7c;
    }

    .footer {
      margin-top: 30px;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">Student Management System</div>

    <div class="button-row">
    <button class="button" onclick="location.href='addstudent.php'">Add Student</button>

    <button class="button" onclick="location.href='searchstudent.php'">Search Student</button>
    </div>

    <div class="button-row">
    <button class="button" onclick="location.href='delete.php'">Delete Student</button>
      <button class="button" onclick="location.href='update.php'">Update Student</button>
    </div>
  </div>
</body>
</html>