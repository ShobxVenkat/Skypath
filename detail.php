<?php
$id = $_GET['id'] ?? '';
require "partials/header.php";
?>

<div id="detailPage"></div>

<script src="data/realEstateData.js"></script>
<script src="data/hostelData.js"></script>
<script src="data/servicesData.js"></script>

<script>
const id = new URLSearchParams(window.location.search).get('id');

const allData = [
  ...window.realEstateData,
  ...window.hostelData,
  ...window.servicesData
];

const item = allData.find(i => i.id === id);

if (!item) {
  document.getElementById('detailPage').innerHTML = `<p>Not found</p>`;
}

/* Image logic */
let activeImage = item.images?.[0] || item.image;

document.getElementById('detailPage').innerHTML = `
<div class="container py-3 pb-5 mb-3">


  <!-- MAIN IMAGE -->
  <div class="mb-3">
    <img id="mainImage"
         src="${activeImage}"
         class="w-100 rounded-4"
         style="height:220px; object-fit:cover;">
  </div>

  <!-- THUMBNAILS -->
  ${item.images ? `
  <div class="d-flex gap-2 mb-3">
    ${item.images.map((img, index) => `
      <img src="${img}"
           onclick="changeImage('${img}', this)"
           class="rounded-3 thumb ${index===0?'active-thumb':''}"
           style="width:60px;height:60px;object-fit:cover;cursor:pointer;">
    `).join('')}
  </div>
  ` : ''}

  <!-- TITLE -->
  <h5 class="fw-bold mb-1">${item.title || item.name}</h5>

  <p class="text-muted small mb-2">
    <i class="bi bi-geo-alt"></i>
    ${item.address || item.location || ''}
  </p>

  <p class="text-muted small mb-3">
    ID: #${item.id}
  </p>

  <!-- PRICE -->
  <div class="bg-success text-white text-center rounded-4 py-3 mb-4 fw-bold fs-5">
    ${item.price || item.rent}
  </div>

  <!-- STATS -->
  ${item.specs ? `
  <div class="row g-3 text-center mb-4">
    <div class="col-6">
      <div class="card p-3 rounded-4 shadow-sm">
        <h4 class="fw-bold text-success">${item.specs.bedrooms}</h4>
        <small>BEDROOMS</small>
      </div>
    </div>
    <div class="col-6">
      <div class="card p-3 rounded-4 shadow-sm">
        <h4 class="fw-bold text-success">${item.specs.bathrooms}</h4>
        <small>BATHROOMS</small>
      </div>
    </div>
    <div class="col-6">
      <div class="card p-3 rounded-4 shadow-sm">
        <h4 class="fw-bold text-success">${item.specs.area}</h4>
        <small>SQ FT</small>
      </div>
    </div>
    <div class="col-6">
      <div class="card p-3 rounded-4 shadow-sm">
        <h4 class="fw-bold text-success">${item.specs.parking}</h4>
        <small>PARKING</small>
      </div>
    </div>
  </div>
  ` : ''}

  <!-- DESCRIPTION -->
  ${item.description ? `
  <h5 class="fw-bold mb-2">Property Description</h5>
  <p class="text-muted">${item.description}</p>
  ` : ''}

  <!-- INTERIOR FEATURES -->
  ${item.interiorFeatures ? `
  <h5 class="fw-bold mt-4">Interior Features</h5>
  <ul class="list-unstyled">
    ${item.interiorFeatures.map(f => `
      <li class="mb-2">
        <i class="bi bi-check-circle-fill text-success"></i>
        ${f}
      </li>
    `).join('')}
  </ul>
  ` : ''}

  <!-- AMENITIES -->
  ${item.buildingAmenities ? `
  <h5 class="fw-bold mt-4 ">Building Amenities</h5>
  <ul class="list-unstyled">
    ${item.buildingAmenities.map(a => `
      <li class="mb-2">
        <i class="bi bi-check-circle-fill text-success"></i>
        ${a}
      </li>
    `).join('')}
  </ul>
  ` : ''}

</div>
`;
</script>

<style>
.thumb {
  opacity: 0.5;
  border: 2px solid transparent;
}
.active-thumb {
  opacity: 1;
  border-color: #2f66f3;
}
</style>

<script>
function changeImage(src, el) {
  document.getElementById('mainImage').src = src;

  document.querySelectorAll('.thumb').forEach(t =>
    t.classList.remove('active-thumb')
  );

  el.classList.add('active-thumb');
}
</script>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
