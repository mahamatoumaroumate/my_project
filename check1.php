<?php
session_start();?>

<?php
include"database.php";
if(isset($_POST["submit"])){
  if(isset($_POST["select"])){
    $time=$_POST["select"];
    $name=$_SESSION["name"];
    $lastname=$_SESSION["lastname"];
    $current=$_SESSION["current"];
    $destinations=$_SESSION["destination"];
    $date=$_SESSION["date"];

    $sql="Insert into bills_informations (name,lastname,currentLocations,destinations,bills_date,time) values('$name','$lastname','$current','$destinations', '$date','$time')";
     mysqli_query($connec,$sql);
     mysqli_close($connec);
    header("location:mesaje.php");
  }
  else{
    $error[] = 'Please Choose One From The Options';
  }
}


?>