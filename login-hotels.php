<?php
require("w.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Document</title>
 <link rel="stylesheet" href="project-login.css?v=<?php  echo time();?>" />
 <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Rouge+Script&display=swap" rel="stylesheet" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
 <div class="header">
  <h1>Welcome To Tourism And Management</h1>
 </div>
 <div class="container">
  <div class="login">
   <h2>Login</h2>
   <?php
        if(isset($error)){
         foreach($error as $error){
            echo '<span class="h10">'.$error.'</span>'."<br>";
         };
        };
        ?>
   <br>
   <form action="" class="form" method="post">
    <span class="s1"> <i class="fa-solid fa-user"></i></span>
    <label for="user">Email</label><br />
    <input type="email" name="email" id="input" placeholder="Type Your email" />
    <br />
    <br />
    <span class="s2"><i class="fa-sharp fa-solid fa-lock"></i></span>
    <label for="password">Password</label> <br />
    <input type="password" name="password" id="password" placeholder="Type Your password" />
    <button type="button" class="btn">
     <span class="hide"><i class="fa-regular fa-eye-slash"></i></span>
     <span class="show">
      <i class="fa-sharp fa-solid fa-eye"></i>
     </span>
    </button>
    <div class="forgot">
     <a href="#">Forgot password?</a>
    </div>
    <br />
    <button class="login-btn" type="submit" name="submit">Login</button>
    <br />
    <br />
    <div class="sign-in">
     <a href="sign.php">Sign In</a>
    </div>
    <br />
    <div class="sites">
     <a href="#" class="face">
      <i class="fa-brands fa-facebook"></i>
     </a>
     <a href="#" class="twiter">
      <i class="fa-brands fa-twitter"></i>
     </a>
     <a href="#" class="instagram">
      <i class="fa-brands fa-instagram"></i>
     </a>
    </div>
   </form>
  </div>
 </div>
 <script src="./project-login.js"></script>
</body>

</html>