<?php
$pageTitle = $_GET['type'] ?? "Details";
require "partials/header.php";
?>

<div class="container min-vh-100 d-flex flex-column align-items-center text-center pt-5">



  <h3 class="fw-bold">
    <?= htmlspecialchars($pageTitle) ?>
  </h3>
  <h4 class="text-primary fw-bold mb-4">Your Bliss!</h4>
<img src="images/rhslogo.png" alt="RHS Logo" class="my-4" style="max-height:120px;">


<div class="d-grid gap-3 w-100 mt-4" style="max-width:360px;">

  <a href="listing.php?type=<?= urlencode($pageTitle) ?>" 
     class="btn btn-dark rounded-pill py-3 fs-5">
    Looking for <?= htmlspecialchars($pageTitle) ?>
  </a>

  <a href="create-listing.php?type=<?= urlencode($pageTitle) ?>" 
     class="btn btn-dark rounded-pill py-3 fs-5">
    List your <?= htmlspecialchars($pageTitle) ?>
  </a>
</div>


<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
