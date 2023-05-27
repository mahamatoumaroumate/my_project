<?php
require("check1.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Document</title>
 <style>
 * {
  margin: 0;
  padding: 0;
 }

 .main {
  width: 100%;
  margin-top: 150px;
  display: grid;
  place-items: center;
 }

 .div1 {
  width: 500px;
  height: 300px;
  background: whitesmoke;
  padding: 10px 20px;
  box-shadow: 2px 2px 5px black;
 }

 .form {
  font-size: 1.2rem;
  margin-top: 10px;
 }

 .div1 h1,
 .div1 h3 {
  text-align: center;
 }

 .div1 h1 {
  font-size: 3rem;
  color: rgb(17, 149, 202);
 }

 .div1 span {
  color: red;
 }

 .form select {
  width: 450px;
  height: 28px;
  padding: 0 10px;
  border-radius: 10px;
  outline: none;
 }

 .form button {
  width: 150px;
  height: 30px;
  margin-top: 10px;
  border-radius: 10px;
  font-size: 1.2rem;
  color: white;
  background: rgb(17, 149, 202);
 }

 .form button:hover {
  color: black;
  background: none;
 }

 .h10 {
  color: red;
  padding: 5px;
  letter-spacing: 2px;
  background: gold;
 }
 </style>
</head>

<body>
 <div class="main">
  <div class="div1">
   <h1>For This Country</h1>
   <br />
   <h3>The Bill Price is <span id="price">400</span>$</h3>

   <form action="" class="form" method="post">
    <br />
    <button type="submit" name="submit">submit</button>
    <br>
    <br>
    <?php
        if(isset($error)){
         foreach($error as $error){
            echo '<span class="h10">'.$error.'</span>'."<br>";
         };
        };
        ?>
   </form>
  </div>
 </div>
 <script src="./check.js"></script>
</body>

</html>