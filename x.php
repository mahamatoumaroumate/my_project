<?php
session_start();
include"database.php";
 if(isset($_POST["submit"])){    $name=$_POST["email"];
$password=$_POST["password"];
 $sql1="select email,password from user where email='$name' and password='$password'";
 $result=mysqli_query($connec,$sql1);
 if(mysqli_num_rows($result)>0){
   $row=mysqli_fetch_assoc($result);
   if($row["email"]==$name && $row["password"]==$password){
     header("location:book.php");
   }
    }
     else{
     $error[] = 'incorrect email or password!';
   }
   
  }
?>