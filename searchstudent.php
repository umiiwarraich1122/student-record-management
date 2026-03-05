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
    }

    .search-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 500px;
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

    @media (max-width: 600px) {
      .search-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

      <?php 
include ("search_student.php");
?>

    </body>
    </html>