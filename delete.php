<?php
if(isset($_GET["id"])){
 $server="localhost";
  $username="root";
  $password="";
  $database="mydatabase";
  $id=$_GET["id"];
  $connection=new mysqli($server,$username,$password,$database);
  $sql="DELETE FROM user WHERE id=$id";
  $connection->query($sql);
}
header("location:/my_project/admin.php");
exit;
?>