<?php
$pageTitle = "Real Estate";
require "partials/header.php";
?>

<div class="container py-4 pb-5">
  <h5 class="fw-bold mb-3">Real Estate</h5>

  <div class="row g-3">
    <?php
    $items = [
      "Apartment",
      "1BHK Individual House",
      "2BHK Individual House",
      "3BHK Individual House"
    ];

    foreach ($items as $item) {
      echo '
      <div class="col-6">
        <a href="sub-page.php?type='.urlencode($item).'" class="text-decoration-none text-dark">
          <div class="card shadow-sm h-100">
            <img src="images/apatment.png" class="card-img-top">
            <div class="card-body">
              <h6 class="fw-semibold">'.$item.'</h6>
            </div>
          </div>
        </a>
      </div>';
    }
    ?>
  </div>
</div>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
