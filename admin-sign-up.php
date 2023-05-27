<?php
include"database.php";
require"admin-sing-check.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 .main {
  width: 100%;
  height: 100vh;
  display: grid;
  place-items: center;
 }

 .center {
  width: 500px;
  height: 350px;
  margin-top: 20px;
  box-shadow: 2px 2px black;
  background: whitesmoke;
  padding: 30px 50px;
  position: relative;
  font-size: 1.2rem;
 }

 .h10 {
  position: absolute;
  top: 10px;
  background: rgb(210, 50, 60);
  padding: 3px 10px;
 }

 form input {
  width: 300px;
  height: 25px;
  border-radius: 10px;
  padding-left: 10px;
  font-size: 1.2rem;
 }

 button {
  width: 150px;
  height: 30px;
  border-radius: 10px;
  background: rgb(137, 22, 114);
  font-size: 1.2rem;
  color: white;
 }
 </style>
</head>

<body>
 <main class="main">
  <div class="center">
   <form action="" method="post">
    <?php
        if(isset($error)){
         foreach($error as $error){
            echo '<span class="h10">'.$error.'</span>'."<br>";
         };
        };
        ?>

    <label for="">Email</label>
    <br>
    <input type="email" name="email" id="" placeholder="Enter Your Email"> <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password" id="" placeholder="Enter Your Password">
    <br>
    <label for="">FirstName</label>
    <br>
    <input type="text" name="FirstName" placeholder="Enter Your Name">
    <br>
    <label for="">LastName</label>
    <br>
    <input type="text" name="LastName" placeholder="Enter Your LastName">
    <br>
    <br>
    <button type="submit" name="submit">submit</button>
   </form>
  </div>
 </main>
</body>

</html>