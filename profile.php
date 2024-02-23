<?php

session_start();
require_once 'utils.php';

if(!Utils::isLoggedIn()){
  Utils::redirect('./');
}

$user = null;
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark bg-gradient">
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h1 class="fw-bold text-secondary">User Profile</h1>
          </div>
          <div class="card-body p-5">

          <table class="table table-striped table-bordered">
            <tr>
              <th>Name</th>
              <td><?= $user['name']?></td>
            </tr>
            <tr>
              <th>Email</th>
              <td><?= $user['email']?></td>
            </tr>
            <tr>
              <th>Created At</th>
              <td><?= $user['created_at']?></td>
            </tr>
            <tr>
              <th>Updated At</th>
              <td><?= $user['updated_at']?></td>
            </tr>
          </table>
          </div>

          <div class="card-footer px-5 text-end">
            <a href="action.php?logout=1" class="btn btn-danger">Logout</a>
          </div>



        </div>
      </div>
    </div>
  </div>
  
</body>
</html>