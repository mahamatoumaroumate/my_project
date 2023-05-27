<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Page</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 <style>
 body {
  background-color: #f8f9fa;
 }

 .navbar {
  background-color: #343a40;
 }

 .navbar-brand {
  font-size: 24px;
 }

 .navbar-nav .nav-link {
  font-size: 18px;
  margin-left: 15px;
 }

 .card {
  border: none;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
 }

 .card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 0;
 }

 .card-text {
  font-size: 32px;
  margin-top: 8px;
 }

 body {
  background: rgb(63, 94, 251);
  background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(107, 252, 70, 0.6896008403361344) 100%);
 }
 </style>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
   <a class="navbar-brand" href="#">Admin Page</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
      <a class="nav-link" href="/my_project/bills-count.php">Count Bills</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="/my_project/countall.php">Count Users</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="/my_project/Travel-Tourist.php">User Page</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="/my_project/settings.php">Settings</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="adminlogin.php">Logout</a>
     </li>
    </ul>
   </div>
  </div>
 </nav>

 <div class="container my-5">
  <h2 class="mb-4">Admin Dashboard</h2>
  <div class="row">
   <div class="col-md-6">
    <div class="card mt-4">
     <div class="card-body">
      <h5 class="card-title">Total Users</h5>
      <h2 class="card-text">
       <?php
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "mydatabase";

                            // Create a connection
                            $connection = new mysqli($server, $username, $password, $database);

                            // Check connection
                            if ($connection->connect_error) {
                                die("Connection failed: " . $connection->connect_error);
                            }

                            // Count all users
                            $sql = "SELECT COUNT(*) AS total_users FROM user";
                            $result = $connection->query($sql);

                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo $row["total_users"];
                            } else {
                                echo "0";
                            }

                            // Close the connection
                            $connection->close();
                            ?>
      </h2>
     </div>
    </div>
   </div>
   <div class="col-md-6">
    <div class="card mt-4">
     <div class="card-body">
      <h5 class="card-title">Total Sales</h5>
      <h2 class="card-text">$1500,000</h2>
     </div>
    </div>
   </div>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>