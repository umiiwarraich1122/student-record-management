
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Student Management System</title>
  <link rel="stylesheet" href="student.css">
</head>
<style>
  body{
    background: linear-gradient(to right, #8360c3, #2ebf91);
  }
    .login-link-button {
    display: inline-block;
    padding: 10px 20px;
    background: linear-gradient(to right, #8360c3, #2ebf91);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
  }
  
  .login-link-button:hover {
    background-color: rgba(62, 183, 199, 0.95);;
    transform: scale(1.05);
  }
  
</style>


<body>
  <header class="login-header">
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
    <div class="login-container">
      
    <form action="logserver.php" method="POST">
        <div class="input-group">
          <span class="icon">&#128100;</span>
          <input type="text" name="email" placeholder="Email" required>ed>
        </div>
        <div class="input-group">
          <span class="icon">&#128274;</span>
          <input type="password" name="pasword" placeholder="Password" required>
        </div>
        <div class="options">
          <label><input type="checkbox"> Remember me</label>
      
        </div>
        <input type="submit" value="Login">

      <h1> Create Acount  <a href="signup.php"> signup </a> </h1> 
      </form>
    </div>
  </header>

  <?php 
include ("logserver.php");
?>

</body>
</html>
