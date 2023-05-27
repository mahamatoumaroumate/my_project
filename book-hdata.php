<?php
session_start();
include"database.php";
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $lastname=$_POST["lastname"];
  $number=$_POST["number"];
  $date=$_POST["date"];
  if(!empty($name) && !empty($lastname) && !empty($number) && !empty($date)){
    $_SESSION["name"]=$name;
    $_SESSION["lastname"]=$lastname;
   $_SESSION["number"]=$number;
    $_SESSION["date"]=$date;
     $sql="Insert into Hotel (name,lastname,number,date) values('$name','$lastname','$number','$date')";
     mysqli_query($connec,$sql);
     mysqli_close($connec);
    header("location:book-info.php");
  }
  else{
    $error[] = 'Please Fill all The Requirement Inputs!';
  }
}


?>