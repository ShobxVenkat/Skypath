<?php
$pageTitle = "Favourites";
$currentPage = "liked";
require "partials/header.php";
?>

<div class="container py-4 pb-5">
  <h4 class="fw-bold mb-3">Your Favourites</h4>
  <div id="favContainer"></div>
</div>

<script src="data/realEstateData.js"></script>
<script src="data/hostelData.js"></script>
<script src="data/servicesData.js"></script>

<script>
const favIds = JSON.parse(localStorage.getItem('favourites')) || [];

const allData = [
  ...window.realEstateData,
  ...window.hostelData,
  ...window.servicesData
];

const favItems = allData.filter(item => favIds.includes(item.id));

const container = document.getElementById('favContainer');

if (!favItems.length) {
  container.innerHTML = `<p class="text-muted">No favourites yet.</p>`;
} else {
  container.innerHTML = favItems.map(item => `
    <a href="detail.php?id=${item.id}"
       class="text-decoration-none text-dark">

      <div class="card mb-3 shadow-sm">
        <div class="card-body d-flex gap-3">
          <img src="${item.images?.[0] || item.image}"
               width="80" class="rounded">

          <div>
            <h6 class="fw-bold mb-1">
              ${item.title || item.name}
            </h6>
            <p class="text-muted small mb-0">
              ${item.price || item.rent || ''}
            </p>
          </div>
        </div>
      </div>
    </a>
  `).join('');
}
</script>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
