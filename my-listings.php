<?php
$pageTitle = "My Listings";
$currentPage = "panel";
require "partials/header.php";
?>

<div class="container py-4 pb-5">

  <h5 class="fw-bold mb-3">My Listings</h5>

  <!-- Listing 1 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">2 BHK Apartment</h6>
        <p class="text-muted small mb-1">Whitefield, Bangalore</p>
        <p class="fw-semibold mb-0">₹ 78 Lakh</p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-success fs-6 px-3 py-2">
        Active
      </span>

    </div>
  </div>

  <!-- Listing 2 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">1 BHK Apartment</h6>
        <p class="text-muted small mb-1">Gachibowli, Hyderabad</p>
        <p class="fw-semibold mb-0">₹ 45 Lakh</p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-warning text-dark fs-6 px-3 py-2">
        Pending
      </span>

    </div>
  </div>

  <!-- Listing 3 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">Boys Hostel</h6>
        <p class="text-muted small mb-1">Madhapur, Hyderabad</p>
        <p class="fw-semibold mb-0">₹ 7,500 / month</p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-danger fs-6 px-3 py-2">
        Inactive
      </span>

    </div>
  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
