<?php
session_start();
include"database.php";
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $lastname=$_POST["lastname"];
  $current=$_POST["current"];
  $destination=$_POST["destination"];
  $date=$_POST["date"];
  if(!empty($name) && !empty($lastname) && !empty($current) && !empty($date)){
    $_SESSION["name"]=$name;
    $_SESSION["lastname"]=$lastname;
    $_SESSION["current"]=$current;
    $_SESSION["destination"]=$destination;
    $_SESSION["date"]=$date;
     $sql="Insert into bills (name,lastname,currentCountry,destination,date) values('$name','$lastname','$current','$destination','$date')";
     mysqli_query($connec,$sql);
     mysqli_close($connec);
    header("location:check.php");
  }
  else{
    $error[] = 'Please Fill all The Requirement Inputs!';
  }
}


?>