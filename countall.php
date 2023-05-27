<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Count Users</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
 <div class="container my-5">
  <h2 class="mb-4">Count Users</h2>
  <div class="card">
   <div class="card-body">
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
                    $totalUsers = $row["total_users"];
                    echo "<h4 class='card-title'>Total Users: " . $totalUsers . "</h4>";
                } else {
                    echo "<h4 class='card-title'>No users found.</h4>";
                }

                // Close the connection
                $connection->close();
                ?>
   </div>
  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>