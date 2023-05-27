<?php
require("admin-check.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login Page</title>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

 <style>
 /* Custom CSS styles */
 body {
  background-color: #f8f9fa;
  padding: 20px;
 }

 .login-card {
  max-width: 400px;
  margin: 70px auto;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  padding: 30px;
 }

 .login-card h2 {
  text-align: center;
  margin-bottom: 30px;
 }

 .form-group {
  margin-bottom: 20px;
 }

 .form-group label {
  font-weight: bold;
 }

 .form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
 }

 .form-group button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border-radius: 10px;
 }

 .form-group button:hover {
  background-color: #0056b3;
 }

 .form-group .text-center {
  margin-top: 10px;
 }

 .form-group .text-center a {
  color: #007bff;
 }

 .form-group .text-center .signup-btn {
  margin-top: 10px;
 }

 .h10 {
  color: #fff;
  padding: 5px;
  letter-spacing: 2px;
  background: gold;
 }
 </style>
</head>

<body>
 <div class="container">
  <div class="row">
   <div class="col-md-6 offset-md-3">
    <div class="login-card">
     <h2>Login</h2>

     <form method="post">
      <div class="form-group">
       <label for="username">AdminEmail</label>
       <input type="text" id="username" name="email" required>
      </div>

      <div class="form-group">
       <label for="password">Password</label>
       <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
       <button type="submit" name="submit">Login</button>
      </div>

      <div class="form-group text-center">
       <button class="btn btn-primary signup-btn" onclick="redirectToSignUp()">Sign Up</button>
       <a href="#">Forgot password?</a>
      </div>
      <br>
      <?php
                        if (isset($error)) {
                            foreach ($error as $error) {
                                echo '<span class="h10">' . $error . '</span>' . "<br>";
                            };
                        };
                        ?>
     </form>
    </div>
   </div>
  </div>
 </div>

 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

 <script>
 function redirectToSignUp() {
  window.location.href = "admin-sign-up.php"; // Replace "signup.php" with the actual URL of your sign-up page
 }
 </script>
</body>

</html>