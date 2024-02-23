<?php

session_start();
require_once 'utils.php';

if(Utils::isLoggedIn()){
  Utils::redirect('profile.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark bg-gradient">
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-itmes-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h1 class="fw-bold text-secondary">Forgot Password</h1>
          </div>
          <div class="card-body p-5">


          <?php

          echo Utils::displayFlash('forgot_error', 'danger');
          echo Utils::displayFlash('forgot_success', 'sucess');


          ?>


            <form action="action.php" method="POST">
              <input type="hidden" name="forgot" value="1">

              <div class="mb-3">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>

              <div class="mb-3 d-grid">
                <input type="submit" value="Send Reset Link" class="btn btn-primary">
              </div>
              <p class="text-center">Go Back to Login Page? <a href="/">Login</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>