<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Page</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
 <div class="container my-5">
  <h2>List Of Users</h2>
  <a href="create.php" class="btn btn-primary">Create user</a>
  <table class="table">
   <thead>
    <tr>
     <th>Id</th>
     <th>Name</th>
     <th>LastName</th>
     <th>Email</th>
    </tr>
   </thead>
   <tbody>
    <?php
  $server="localhost";
  $username="root";
  $password="";
  $database="mydatabase";
  $connection=new mysqli($server,$username,$password,$database);
  if($connection->connect_error){
   die("connection failed:".$connection->connect_error);
  }
  $sql="SELECT * FROM user";
  $result=$connection->query($sql);
  if(!$result){
die("invalid query:" .$connection->connect_error);
  }
  while($row=$result->fetch_assoc()){
   echo" <tr>
    <td>$row[id]</td>
    <td>$row[FirstName]</td>
    <td>$row[LastName]</td>
    <td>$row[email]</td>
    <td>
   <a href='/my_project/edit.php?id=$row[id]' class='btn btn-primary btn-sm'>Edit</a>
   <a href='/my_project/delete.php?id=$row[id]' class='btn btn-danger btn-sm'>Delete</a>
  </td>";
  }
  ?>

   </tbody>
  </table>
 </div>
</body>

</html>