<?php
require"book-hdata.php";?>
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
  margin-top: 90px;
  display: grid;
  place-items: center;
 }

 .container h1,
 .container h3 {
  text-align: center;
 }

 .center {
  width: 100%;
  display: grid;
  grid-template-columns: 2fr 2fr;
  margin-top: 50px;
  gap: 20px 30px;
 }

 .form {
  font-size: 1.2rem;
  margin-top: 50px;
 }

 .form input {
  width: 450px;
  height: 28px;
  padding: 0 10px;
  border-radius: 10px;
  outline: none;
 }

 .div1 {
  width: 350spx;
  border: 2px solid #eee;
  background: whitesmoke;
  text-align: center;
  padding: 20px 30px;
  display: none;
 }

 .show {
  display: inline;
 }

 .div1 span {
  color: rgb(17, 149, 202);
 }

 .container h1 {
  color: rgb(17, 149, 202);
 }

 .container h3 {
  color: rgb(202, 156, 17);
 }

 .form button {
  width: 150px;
  height: 30px;
  margin-top: 10px;
  border-radius: 10px;
  font-size: 1.2rem;
  color: white;
  background: rgb(202, 156, 17);
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
  <div class="container">
   <h1>Welcome To International Hotels</h1>
   <h3>Book easily The Room That You Are Looking For</h3>

   <form action="" class="form" method="post">
    <label for="">Name</label><br />
    <input type="text" placeholder="Enter Your Name" name="name" id="name" /><br />
    <label for="">LastName</label><br />
    <input type="text" placeholder="Enter Your Lastname" name="lastname" id="lastname" /><br />
    <label for="number">Room No:</label>
    <br />
    <input type="number" name="number" id="number" />
    <br />
    <label for="date">Date</label>
    <br />
    <input type="date" name="date" id="date" />
    <br />
    <button type="submit" name="submit">submit</button>
    <br>
    <br><?php
        if(isset($error)){
         foreach($error as $error){
            echo '<span class="h10">'.$error.'</span>'."<br>";
         };
        };
        ?>
   </form>
  </div>
 </div>
 <script src="./book.js"></script>
</body>

</html>