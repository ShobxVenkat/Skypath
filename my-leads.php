<?php
$pageTitle = "My Leads";
$currentPage = "panel";
require "partials/header.php";
?>

<div class="container py-4 pb-5">

  <h5 class="fw-bold mb-3">My Leads</h5>

  <!-- Lead 1 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">Rahul Sharma</h6>
        <p class="text-muted small mb-1">
          Interested in: 2 BHK Apartment
        </p>
        <p class="text-muted small mb-0">
          📍 Whitefield, Bangalore
        </p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-primary fs-6 px-3 py-2">
        New
      </span>

    </div>
  </div>

  <!-- Lead 2 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">Anita Verma</h6>
        <p class="text-muted small mb-1">
          Interested in: Girls Hostel
        </p>
        <p class="text-muted small mb-0">
          📍 Gachibowli, Hyderabad
        </p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-success fs-6 px-3 py-2">
        Contacted
      </span>

    </div>
  </div>

  <!-- Lead 3 -->
  <div class="card mb-3 shadow-sm">
    <div class="card-body d-flex justify-content-between align-items-center">

      <!-- LEFT -->
      <div>
        <h6 class="fw-bold mb-1">Suresh Kumar</h6>
        <p class="text-muted small mb-1">
          Interested in: 1 BHK Apartment
        </p>
        <p class="text-muted small mb-0">
          📍 Noida Sector 62
        </p>
      </div>

      <!-- RIGHT STATUS -->
      <span class="badge bg-secondary fs-6 px-3 py-2">
        Closed
      </span>

    </div>
  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
