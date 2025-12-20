<?php
$pageTitle = "Login";
$currentPage = "login";
require "partials/header.php";
?>

<div class="container py-4 pb-5">

  <!-- TOGGLE -->
  <div class="d-flex justify-content-center mb-4">
    <a href="login.php" class="fw-bold me-4 text-primary text-decoration-none border-bottom border-2 border-primary">
      Login
    </a>
    <a href="register.php" class="fw-bold text-muted text-decoration-none">
      Register
    </a>
  </div>

  <!-- LOGIN FORM -->
  <div class="card shadow-sm">
    <div class="card-body">

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter email">
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter password">
      </div>

      <button class="btn btn-primary w-100 py-2">
        Login
      </button>

      <p class="text-center text-muted small mt-3 mb-0">
        Forgot password? Coming soon
      </p>

    </div>
  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
