<?php
$pageTitle = "Register";
$currentPage = "login";
require "partials/header.php";
?>

<div class="container py-4 pb-5">

  <!-- TOGGLE -->
  <div class="d-flex justify-content-center mb-4">
    <a href="login.php" class="fw-bold me-4 text-muted text-decoration-none">
      Login
    </a>
    <a href="register.php" class="fw-bold text-primary text-decoration-none border-bottom border-2 border-primary">
      Register
    </a>
  </div>

  <!-- REGISTER FORM -->
  <div class="card shadow-sm">
    <div class="card-body">

      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter full name">
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter email">
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Create password">
      </div>

      <button class="btn btn-primary w-100 py-2">
        Register
      </button>

      <p class="text-center text-muted small mt-3 mb-0">
        By registering, you agree to our terms
      </p>

    </div>
  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
