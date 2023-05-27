<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Stylish Links</title>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

 <style>
 /* Custom CSS styles */
 body {
  background-color: #f8f9fa;
  padding: 20px;
 }

 h1 {
  text-align: center;
  margin-bottom: 40px;
 }

 .link-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin-bottom: 20px;
  transition: transform 0.3s ease-in-out;
 }

 .link-card:hover {
  transform: translateY(-5px);
 }

 .link-card a {
  text-decoration: none;
  color: #212529;
 }

 .link-card h2 {
  margin-bottom: 10px;
 }

 .link-card p {
  color: #6c757d;
 }
 </style>
</head>

<body>
 <div class="container">
  <h1>Adming Setting</h1>

  <div class="row">
   <div class="col-md-4">
    <div class="link-card">
     <a href="/my_project/admin.php">
      <h2>USER</h2>
      <p>User setting</p>
     </a>
    </div>
   </div>

   <div class="col-md-4">
    <div class="link-card">
     <a href="/my_project/bills-crud.php">
      <h2>BILLS</h2>
      <p>Bills Setting</p>
     </a>
    </div>
   </div>

   <div class="col-md-4">
    <div class="link-card">
     <a href="/my_project/adminpage.php">
      <h2>Go Back</h2>
      <p>Back To Main Page</p>
     </a>
    </div>
   </div>
  </div>
 </div>

 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>