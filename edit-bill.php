<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mydatabase";
$connection = new mysqli($server, $username, $password, $database);

$id = "";
$name = "";
$lastname = "";
$currentCountry = "";
$destination = "";
$date = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location:/my_project/admin.php");
        exit;
    }
    $id = $_GET["id"];
    $sql = "SELECT * FROM bills WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:/my_project/adminpage.php");
        exit;
    }
    $name = $row["name"];
    $lastname = $row["lastname"];
    $currentCountry = $row["currentCountry"];
    $destination = $row["destination"];
    $date = $row["date"];
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $currentCountry = $_POST["currentCountry"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];

    if (empty($name) || empty($lastname) || empty($currentCountry) || empty($destination) || empty($date)) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "UPDATE bills SET name='$name', lastname='$lastname', currentCountry='$currentCountry', destination='$destination' WHERE id=$id";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid Query: " . $connection->error;
        } else {
            $successMessage = "The user was updated correctly";
            header("location:/my_project/adminpage.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Create</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
 <div class="container my-5">
  <h2>Create New User</h2>
  <?php if (!empty($errorMessage)) : ?>
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
   <strong><?php echo $errorMessage; ?></strong>
   <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  <?php endif; ?>
  <form method="post">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Last Name</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Current Country</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="currentCountry" value="<?php echo $currentCountry; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Destination</label>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="destination" value="<?php echo $destination; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-6">
     <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
    </div>
   </div>
   <?php if (!empty($successMessage)) : ?>
   <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong><?php echo $successMessage; ?></strong>
    <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
   </div>
   <?php endif; ?>
   <div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
     <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-3 d-grid">
     <a href="adminpage.php" class="btn btn-outline-primary" role="button">Cancel</a>
    </div>
   </div>
  </form>
 </div>
</body>

</html>