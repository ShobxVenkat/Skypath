<?php
$pageTitle = $_GET['type'] ?? "Details";
require "partials/header.php";
?>

<div class="container py-5 pb-5 text-center">

  <h3 class="fw-bold">
    <?= htmlspecialchars($pageTitle) ?>
  </h3>
  <h4 class="text-primary fw-bold mb-4">Your Bliss!</h4>

  <div class="d-grid gap-3">
   <a href="listing.php?type=<?= urlencode($pageTitle) ?>" 
   class="btn btn-dark rounded-pill py-3 fs-5">
  Looking for <?= htmlspecialchars($pageTitle) ?>
</a>


  <a href="create-listing.php?type=<?= urlencode($pageTitle) ?>" 
   class="btn btn-dark rounded-pill py-3 fs-5">
  List your <?= htmlspecialchars($pageTitle) ?>
</a>
  </div>

</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
