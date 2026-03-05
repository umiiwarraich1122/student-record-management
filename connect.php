<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Management System</title>
  <style>
    
    :root {
    background color: #8360c3, #2ebf91;
      --white: #fff;
    }

    
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: var( #8360c3, #2ebf91);
      color: var( #8360c3, #2ebf91);
    }

    header {
      background-color: var( #8360c3, #2ebf91);
      color: var(--white);
      padding: 20px;
      text-align: center;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 10px 0 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    nav ul li a {
      color: var( #8360c3, #2ebf91);
      text-decoration: none;
      font-weight: bold;
    }

    main {
      padding: 30px;
    }

    h2 {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: var(--white);
    }

    th, td {
      padding: 12px;
      border: 1px solid var(--dark-brown);
      text-align: left;
    }

    th {
      background-color: var(--dark-brown);
      color: var(--white);
    }

    .print-btn {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: var(--dark-brown);
      color: var(--white);
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    .print-btn:hover {
      background-color: #4e3325;
    }

    footer {
      background-color: var(--dark-brown);
      color: var(--white);
      text-align: center;
      padding: 15px 0;
      margin-top: 30px;
    }

    .login-header {
      width: 100%;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px;
      width: 300px;
      margin: auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .user-icon img {
      background-color: #1e2a38;
      border-radius: 50%;
      padding: 10px;
      width: 60px;
      margin-top: -50px;
      margin-bottom: 20px;
    }

    .input-group {
      display: flex;
      align-items: center;
      margin: 15px 0;
      background-color: #1e2a38;
      border-radius: 5px;
      padding: 10px;
    }

    .input-group .icon {
      color: white;
      margin-right: 10px;
    }

    .input-group input {
      border: none;
      background: none;
      color: white;
      width: 100%;
      outline: none;
    }

    .options {
      display: flex;
      justify-content: space-between;
      margin: 10px 0 20px 0;
      font-size: 12px;
      color: white;
    }

    .options a {
      color: #b0c4de;
      text-decoration: none;
    }

    .login-button {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #1e2a38;
      color: white;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <h1>Student Management System</h1>
    <nav>
      <ul>
        <li><a href="login.html" class="login-link-button">Login</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Students</a></li>
        <li><a href="#">Results</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h2>Student Records</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Course</th>
          <th>GPA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>101</td>
          <td>Ali Khan</td>
          <td>BSCS</td>
          <td>3.6</td>
        </tr>
        <tr>
          <td>102</td>
          <td>Sana Malik</td>
          <td>BSIT</td>
          <td>3.9</td>
        </tr>
      </tbody>
    </table>

    <button onclick="window.print()" class="print-btn">Print Page</button>
  </main>

  <footer>
    <p>&copy; 2025 Student Management System | All rights reserved.</p>
  </footer>

  <script src="student.js"></script>
</body>
</html>
