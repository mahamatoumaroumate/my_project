<?php
$connec="";
try{
 $connec=mysqli_connect("localhost","root","","mydatabase");
}catch(mysqli_sql_execption){
 echo"you are not connected";
}
?>