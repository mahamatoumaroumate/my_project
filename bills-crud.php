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

// Add a new bill
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $currentCountry = $_POST['currentCountry'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];

    $sql = "INSERT INTO bills (name, lastname, currentCountry, destination, date) VALUES ('$name', '$lastname', '$currentCountry', '$destination', '$date')";
    $result = $connection->query($sql);

    if ($result) {
        echo "Bill added successfully.";
    } else {
        echo "Error: " . $connection->error;
    }
}

// Update a bill
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $currentCountry = $_POST['currentCountry'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];

    $sql = "UPDATE bills SET name='$name', lastname='$lastname', currentCountry='$currentCountry', destination='$destination', date='$date' WHERE id=$id";
    $result = $connection->query($sql);

    if ($result) {
        echo "Bill updated successfully.";
    } else {
        echo "Error: " . $connection->error;
    }
}

// Delete a bill
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM bills WHERE id=$id";
    $result = $connection->query($sql);

    if ($result) {
        echo "Bill deleted successfully.";
    } else {
        echo "Error: " . $connection->error;
    }
}

// Retrieve all bills
$sql = "SELECT * FROM bills";
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bills Management</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
 <div class="container mt-5">
  <h2>Bills Management</h2>

  <!-- Add Bill Form -->
  <h4>Add New Bill</h4>
  <form method="POST">
   <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
   </div>
   <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required>
   </div>
   <div class="mb-3">
    <label for="currentCountry" class="form-label">Current Location</label>
    <input type="text" class="form-control" id="currentCountry" name="currentCountry" required>
   </div>
   <div class="mb-3">
    <label for="destination" class="form-label">Destination</label>
    <input type="text" class="form-control" id="destination" name="destination" required>
   </div>
   <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" name="date" required>
   </div>
   <button type="submit" class="btn btn-primary" name="add">Add</button>
  </form>

  <!-- List of Bills -->
  <h4 class="mt-5">All Bills</h4>
  <table class="table mt-3">
   <thead>
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Last Name</th>
     <th>Current Location</th>
     <th>Destination</th>
     <th>Date</th>
     <th>Actions</th>
    </tr>
   </thead>
   <tbody>
    <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $lastname = $row['lastname'];
                        $currentCountry = $row['currentCountry'];
                        $destination = $row['destination'];
                        $date = $row['date'];
                        ?>
    <tr>
     <td><?php echo $id; ?></td>
     <td><?php echo $name; ?></td>
     <td><?php echo $lastname; ?></td>
     <td><?php echo $currentCountry; ?></td>
     <td><?php echo $destination; ?></td>
     <td><?php echo $date; ?></td>
     <td>
      <a href="edit-bill.php?id=<?php echo $id; ?>" class="btn btn-primary btn-sm">Edit</a>
      <a href="?delete=<?php echo $id; ?>" class="btn btn-danger btn-sm"
       onclick="return confirm('Are you sure you want to delete this bill?')">Delete</a>
     </td>
    </tr>
    <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>No bills found</td></tr>";
                }
                ?>
   </tbody>
  </table>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Close the connection
$connection->close();
?>