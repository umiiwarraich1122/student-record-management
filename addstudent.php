<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Student - Student Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #8360c3, #2ebf91);
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 500px;
      margin-bottom: 40px;
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #444;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }
    .submit-btn {
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

    .submit-btn:hover {
      background-color: #239c7c;
    }

   
    .center-banner {
      background-color: #5c4033; /* brown */
      color: white;
      padding: 20px 40px;
      border-radius: 10px;
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }
</style>
</head>
<body>

  <div class="form-container">
    <h2>Add Student</h2>
    <form action="add_server.php" method="POST">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" id="name" name="name" required />
      </div>

      <div class="form-group">
        <label for="father">Father's Name</label>
        <input type="text" id="father" name="father" required />
      </div>

      <div class="form-group">
        <label for="mother">Mother's Name</label>
        <input type="text" id="mother" name="mother" required />
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" name="age" required />
      </div>
      <div class="form-group">
        <label for="education">Education</label>
        <input type="text" id="education" name="education" required />
      </div>

      <div class="form-group">
        <label for="department">Department</label>
        <select id="department" name="department" required>
          <option value="" disabled selected>Select Department</option>
          <option value="Computer Science">Computer Science</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Business Administration">Business Administration</option>
          <option value="Mathematics">Mathematics</option>
        </select>
      </div>

      <div class="form-group">
        <label for="section">Section</label>
        <input type="text" id="section" name="section" required />
      </div>

      <div class="form-group">
        <label for="roll">Roll Number</label>
        <input type="text" id="roll" name="roll" required />
      </div>
      <div class="form-group">
        <label for="reg">Registration ID</label>
        <input type="text" id="reg" name="reg" required />
      </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

  <?php 
include ("add_server.php");
?>
</body>
</html>
