<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Student Management System</title>
    <link rel="stylesheet" href="student.css">
    <style>
    
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: "";
            background-image: url('police1.jpeg');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            filter: blur(8px);
        }

        header {
            background-color:  #8360c3;
            color: white;
            padding: 20px;
            width: 100%;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
        }

        .signup-container {
            background-color:  #8360c3, #2ebf91; 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 320px;
            margin-top: 100px;
            color: #8360c3, #2ebf91;
            z-index: 1;
        }

        h2 {
            text-align: center;
            color:, #8360c3, #2ebf91;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid  #8360c3, #2ebf91;
            border-radius: 5px;
            background-color: #fff;
            color: #2ebf91;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:, #8360c3, #2ebf91; 
            color: purple;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color:, #8360c3, #2ebf91; 
            transform: scale(1.05);
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            color: #8360c3, #2ebf91;
        }
    </style>
</head>
<body>

<header>
    <h1>STUDENT MANAGEMENT SYSTEM - Signup</h1>
</header>

<div class="signup-container">
    <h2>Create an Account</h2>
    <form action="login.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="gmail" placeholder="Email Address" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pasword" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
</div>

<?php 
include ("login.php");
?>

</body>
</html>
