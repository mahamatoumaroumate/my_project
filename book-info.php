<?php
include"book-hotel-check.php";?>
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
  height: 60vh;
  display: grid;
  place-items: center;
 }

 .form {
  width: 500px;
 }

 .form span {
  color: rgb(16, 165, 165);
 }

 .form h4 {
  color: rgb(204, 184, 70);
 }

 .form button {
  width: 150px;
  height: 30px;
  font-size: 1.2rem;
  margin: 20px 100px;
  border-radius: 10px;
  background: lightskyblue;
 }

 .form button:hover {
  background: none;
 }
 </style>
</head>

<body>
 <div class="main">
  <form class="form" method="post">
   <h1>
    The Price For The Room That You Have Choosed Is
    <span id="price"></span> $
   </h1>
   <h4>Please Click The Button To Confirm Your Reservation</h4>
   <button type="submit" name="submit">submit</button>
  </form>
 </div>
 <script src="./book-info.js"></script>
</body>

</html>