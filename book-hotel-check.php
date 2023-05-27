<?php
session_start();?>

<?php
include"database.php";
if(isset($_POST["submit"])){
    header("location:mesage2.php");
  }

?>