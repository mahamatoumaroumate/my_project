<?php
$server="localhost";
  $username="root";
  $password="";
  $database="mydatabase";
  $connection=new mysqli($server,$username,$password,$database);
$id="";
$name="";
$lastname="";
$email="";
$password="";
$errorMeassage="";
$successMessage="";
if($_SERVER['REQUEST_METHOD']=='GET'){
 if(!isset($_GET["id"])){
  header("location:/my_project/admin.php");
 exit;
 }
 $id=$_GET["id"];
 $sql="SELECT * FROM user WHERE id=$id";
 $result=$connection->query($sql);
 $row=$result->fetch_assoc();
 if(!$row){
  header("location:/my_project/admin.php");
 exit;
 }
 $name=$row["FirstName"];
 $lastname=$row["LastName"];
 $email=$row["email"];
 $password=$row["password"];
}else{
$id=$_POST["id"];
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
do{
if(empty($name)||empty($lastname)|| empty($email)|| empty($password)){
   $errorMeassage="All the fields are required";
   break;
}
$sql="UPDATE user SET email='$email', password='$password', FirstName='$name', LastName='$lastname' WHERE id=$id";
$result=$connection->query($sql);
if(!$result){
 $errorMeassage="invalid Query: ".$connection->error;
 break;
}
$successMessage="The User Updated Correctly";
header("location:/my_project/admin.php");
exit;
}while(true);}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>create</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 <div class="container my-5">
  <h2>Create New User</h2>
  <?php
  if(!empty($errorMeassage)){
   echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>
   <strong>$errorMeassage</strong>
   <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
   </div>";
  }
  
  ?>
  <form method="post">
   <input type="hidden" name="id" value="<?php echo $id;?>">
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">LastName</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">password</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
    </div>
   </div>
   <?php
  if(!empty($successMessage)){
   echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>$successMessage</strong>
   <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
   </div>";
  }
  ?>
   <div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
     <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-3 d-grid">
     <a href="index.php" class="btn btn-outline-primary" role="button">Cancel</a>
    </div>
   </div>
  </form>
 </div>
</body>

</html>