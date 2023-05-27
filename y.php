<?php
session_start();
include"database.php";
if(isset($_POST["submit"])){
  $email=$_POST["email"];
  $password=$_POST["password"];
  $firstname=$_POST["name"];
  $lastname=$_POST["lastname"];
  if(!empty($email) && !empty($firstname) && !empty($lastname) && !empty($password)){
    $sql="Insert into user (email,password,firstname,lastname) values('$email','$password','$firstname','$lastname')";
     mysqli_query($connec,$sql);
     mysqli_close($connec);
   header("location:successfull.html");
  }
  else{
  $error[]="please fill all the options";
  }
}