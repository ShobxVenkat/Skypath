<?php
$type = $_GET['type'] ?? '';
require "partials/header.php";
?>

<div class="container py-4 pb-5">
  <h4 class="fw-bold mb-3"><?= htmlspecialchars($type) ?> Lists</h4>

  <div id="listingContainer"></div>
</div>
<script src="data/realEstateData.js"></script>
<script src="data/hostelData.js"></script>
<script src="data/servicesData.js"></script>

<script>
  console.log(realEstateData); // test
</script>


<script>
const type = new URLSearchParams(window.location.search).get('type');
let data = [];

/* Decide dataset */
if (type.includes('BHK') || type.includes('Apartment')) {
  data = realEstateData;
} else if (type.includes('Hostel') || type.includes('PG')) {
  data = hostelData;
} else {
  data = servicesData;
}

/* Filter */
const rawType = type.toLowerCase().replace(/\s+/g, '');

let filtered = [];

if (rawType.includes('bhk') || rawType.includes('apartment')) {

  filtered = realEstateData.filter(item => {
    const bhk = item.bhk.replace(/\s+/g, '').toLowerCase();

    if (rawType.includes('1bhk')) return bhk === '1bhk';
    if (rawType.includes('2bhk')) return bhk === '2bhk';
    if (rawType.includes('3bhk')) return bhk === '3bhk';

    if (rawType.includes('apartment')) return item.type === 'Apartment';

    return false;
  });

} else if (rawType.includes('co-living')) {

  filtered = hostelData.filter(item =>
    item.type.toLowerCase().includes('co-living')
  );

} else if (rawType.includes('boys')) {

  filtered = hostelData.filter(item =>
    item.type.toLowerCase().includes('boys') &&
    !item.type.toLowerCase().includes('co-living')
  );

} else if (rawType.includes('girls')) {

  filtered = hostelData.filter(item =>
    item.type.toLowerCase().includes('girls') &&
    !item.type.toLowerCase().includes('co-living')
  );

}

 else {

  filtered = servicesData.filter(item =>
    item.name.toLowerCase().includes(type.toLowerCase())
  );
}


const container = document.getElementById('listingContainer');

container.innerHTML = filtered.map(item => `
  <a href="detail.php?id=${item.id}"
     class="text-decoration-none text-dark">

    <div class="card mb-3 shadow-sm position-relative">

      <!-- ❤️ Heart icon -->
      <button
        class="btn position-absolute top-0 end-0 m-2 fav-btn"
        data-id="${item.id}"
        onclick="event.preventDefault(); toggleFav('${item.id}')">
        <i class="bi bi-heart"></i>
      </button>

      <div class="card-body d-flex gap-3">
        <img src="${item.images?.[0] || item.image}"
             width="80" class="rounded">

        <div class="flex-grow-1">
          <h5 class="fw-bold mb-1">${item.price || item.rent}</h5>

          <h6 class="text-primary fw-semibold mb-1">
            ${item.title || item.name}
          </h6>

          <p class="text-muted small mb-0">
            ${item.bhk || item.type || ''}
          </p>
        </div>
      </div>

    </div>
  </a>
`).join('');

</script>


 <Script>
    function getFavs() {
  return JSON.parse(localStorage.getItem('favourites')) || [];
}

function setFavs(favs) {
  localStorage.setItem('favourites', JSON.stringify(favs));
}

function toggleFav(id) {
  let favs = getFavs();

  if (favs.includes(id)) {
    favs = favs.filter(f => f !== id);
  } else {
    favs.push(id);
  }

  setFavs(favs);
  updateFavIcons();
}

function updateFavIcons() {
  const favs = getFavs();
  document.querySelectorAll('.fav-btn').forEach(btn => {
    const icon = btn.querySelector('i');
    const id = btn.dataset.id;

    if (favs.includes(id)) {
      icon.classList.remove('bi-heart');
      icon.classList.add('bi-heart-fill', 'text-danger');
    } else {
      icon.classList.remove('bi-heart-fill', 'text-danger');
      icon.classList.add('bi-heart');
    }
  });
}

updateFavIcons();

 </Script>
<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
