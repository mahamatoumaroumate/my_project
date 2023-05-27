<?php
$server="localhost";
  $username="root";
  $password="";
  $database="mydatabase";
  $connection=new mysqli($server,$username,$password,$database);
  
$name="";
$lastname="";
$email="";
$password="";
$errorMeassage="";
$successMessage="";
if( $_SERVER['REQUEST_METHOD']=='POST' ){
 $name=$_POST["name"];
 $lastname=$_POST["lastname"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 do{
  if(empty($name)||empty($lastname)|| empty($email)|| empty($password)){
   $errorMeassage="All the fields are required";
   break;
  }
 $sql="INSERT INTO user (email,password,FirstName,LastName)"."VALUES ('$email','$password','$name','$lastname')";
$result=$connection->query($sql);
  if(!$result){
$errorMeassage="invalid query:" .$connection->connect_error;
break;
  }
$name="";
$lastname="";
$email="";
$password="";
$successMessage="User Add Correctly";
header("location:/my_project/admin.php");
exit;
 }while(false);
}
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