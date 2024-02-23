<h1>Reset Page</h1>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark bg-gradient">
  <div class="container">
    <row class="min-vh-100 justify-content-center align-itmes-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h1 class="fw-bold text-secondary">Reset Password</h1>
          </div>
          <div class="card-body p-5">

          <?php

          echo Utils::displayFlash('reset_error', 'danger');
          echo Utils::displayFlash('reset_success', 'success');

          ?>

          <form action="action.php" method="POST">
            <input type="hidden" name="reset" value="1">

            <input type="hidden" name="token" value="<?= $_GET['token'] ?? ''; ?>">

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" required >
            </div>
            <div class="mb-3">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>

            </div>
            <div class="mb-3 d-grid">
              <input type="submit" value="Reset Password" class="btn btn-primary">
            </div>
          </form>

          </div>
        </div>
      </div>
    </row>
  </div>
  
</body>
</html>