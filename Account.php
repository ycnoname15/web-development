<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'connect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO signup (email, password)
          VALUES ('$email', '$password')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Data inserted successfully";
  } else {
  
    die(mysqli_error($conn));
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"
    <meta http-equiv="X-UA-Compatible" content="IE=edge"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale Website</title>

    <!--Link To Css-->
    <link rel="stylesheet" href="style.css">

    <!--Box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
   

<!-- Background Pic -->
<div class="backgroundpic"></div>


<body>
    <div class="container">
      <input type="checkbox" id="check">

    <div class="login form">

      <header>Login</header>

      <form action="login.php" method="post">
        <input type="text" placeholder="Enter your email" class = "form-control" name = "email" id = "email" required>
        <input type="password" placeholder="Enter your password"  class = "form-control"   name = "password" id = "password" required>
        <a href="#">Forgot password?</a>
        <input type="submit" class="btn btn-primary" value="Login">
      </form>


        <div class="signup">
          <span class="signup">Don't have an account?
           <label for="check">Signup</label>
          </span>
        </div>

      </div>

      
      <div class="registration form">
      
        <header>Signup</header>

        <form action="Account.php" method="post">
          <input type="text" placeholder="email"  class = "form-control"   name = "email" required>
          <input type="password" placeholder="password" class = "form-control"   name = "password"  required>
          <input type="submit" class = "btn btn-primary" value="sign up"> 
        </form>



        <div class="signup">
          <span class="signup">Already have an account?
           <label for="check">Login</label>
          </span>
        </div>
      </div>
    </div>
  </body>
  </html>
  
