<?php
$pageTitle = "Profile";
$currentPage = "profile";
require "partials/header.php";
?>

<div class="container py-4 pb-5">

  <!-- PROFILE HEADER -->
  <div class="text-center mb-4">
    <img src="images/user.jpg"
         class="rounded-circle mb-2"
         alt="Profile Picture">

    <h5 class="fw-bold mb-0">Amit Kumar</h5>
    <p class="text-muted small mb-1">amit.kumar@email.com</p>
    <p class="text-muted small">📞 +91 9XXXXXXXXX</p>
  </div>

  <!-- STATS -->
  <div class="row text-center mb-4">
    <div class="col-4">
      <div class="card shadow-sm py-3">
        <h5 class="fw-bold mb-0">3</h5>
        <small class="text-muted">Listings</small>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow-sm py-3">
        <h5 class="fw-bold mb-0">5</h5>
        <small class="text-muted">Leads</small>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow-sm py-3">
        <h5 class="fw-bold mb-0">2</h5>
        <small class="text-muted">Favourites</small>
      </div>
    </div>
  </div>

  <!-- PROFILE OPTIONS -->
  <div class="list-group shadow-sm">

    <a href="my-listings.php"
       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <span>
        <i class="bi bi-house-door-fill text-primary me-2"></i>
        My Listings
      </span>
      <i class="bi bi-chevron-right"></i>
    </a>

    <a href="my-leads.php"
       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <span>
        <i class="bi bi-people-fill text-success me-2"></i>
        My Leads
      </span>
      <i class="bi bi-chevron-right"></i>
    </a>

    <a href="#"
       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <span>
        <i class="bi bi-gear-fill text-secondary me-2"></i>
        Settings
      </span>
      <i class="bi bi-chevron-right"></i>
    </a>

    <a href="#"
       class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-danger">
      <span>
        <i class="bi bi-box-arrow-right me-2"></i>
        Logout
      </span>
    </a>

  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
