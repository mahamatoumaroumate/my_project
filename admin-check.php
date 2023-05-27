<?php
session_start();
require"database.php";
 if(isset($_POST["submit"])){    $email=$_POST["email"];
$password=$_POST["password"];
 $sql1="select email,password from admin where email='$email' and password='$password'";
 $result=mysqli_query($connec,$sql1);
 if(mysqli_num_rows($result)>0){
   $row=mysqli_fetch_assoc($result);
   if($row["email"]==$email && $row["password"]==$password){
     header("location:adminpage.php");
   }
    }
     else{
     $error[] = 'incorrect email or password!';
   }
   
  }
  else if(isset($_POST["sign-up"])){
   header("locations:admin-sign-up.php");
  }
?>