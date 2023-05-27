<?php
session_start();
include"database.php";
if(isset($_POST["submit"])){
  $email=$_POST["email"];
  $password=$_POST["password"];
  $firstname=$_POST["FirstName"];
  $lastname=$_POST["LastName"];
  if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password)){
    $sql="Insert into admin (email,password,FirstName,LastName) values('$email','$password','$firstname','$lastname')";
     mysqli_query($connec,$sql);
     mysqli_close($connec);
   header("location:admin-mesage.php");
  }
  else{
  $error[]="please fill all the options";
  }
}