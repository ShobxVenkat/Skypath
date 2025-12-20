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
const type = new URLSearchParams(window.location.search).get('type') || '';
const rawType = type.toLowerCase().replace(/\s+/g, '');
let filtered = [];

/* ================= FILTER LOGIC ================= */

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
} else {
  filtered = servicesData.filter(item =>
    item.name.toLowerCase().includes(type.toLowerCase())
  );
}

/* ================= IMAGE HELPER ================= */

function getImage(item) {
  if (Array.isArray(item.images) && item.images.length) return item.images[0];
  if (item.image) return item.image;
  return 'images/placeholder.jpg';
}

/* ================= RENDER LIST ================= */

const container = document.getElementById('listingContainer');
container.innerHTML = filtered.map(item => `
  <div class="card mb-3 shadow-sm position-relative">

    <button
      class="btn position-absolute top-0 end-0 m-2 fav-btn"
      data-id="${item.id}"
      onclick="event.preventDefault(); toggleFav('${item.id}')">
      <i class="bi bi-heart"></i>
    </button>

    <a href="detail.php?id=${item.id}" class="text-decoration-none text-dark">
      <div class="card-body d-flex gap-3">
        <img src="${getImage(item)}" width="80" height="80"
             class="rounded object-fit-cover">
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
    </a>

    <div class="px-3 pb-3">
      <button
        class="btn btn-primary btn-sm w-100"
        onclick="openConfirmPopup('${item.id}')">
        I'm Interested
      </button>
    </div>

  </div>
`).join('');
</script>

<!-- ================= CONFIRM POPUP (NO GRADIENT) ================= -->

<div id="confirmPopup" class="confirm-overlay d-none">
  <div class="confirm-card text-center">
    <h5 class="fw-bold">Are you sure?</h5>
    <p class="text-muted mb-4">
      Do you want to show interest in this listing?
    </p>

    <div class="d-flex gap-3">
      <button class="btn btn-outline-secondary w-50" onclick="closeConfirmPopup()">
        No
      </button>
      <button class="btn btn-primary w-50" onclick="confirmInterest()">
        Yes
      </button>
    </div>
  </div>
</div>

<!-- ================= SUCCESS POPUP (GRADIENT) ================= -->

<div id="interestPopup" class="interest-overlay d-none">
  <div class="interest-card text-center">
    <div class="check-icon">✓</div>
    <h3 class="fw-bold mt-3">Thank You!</h3>
    <p class="text-muted">
      Your interest has been successfully received.
      We will get back to you soon.
    </p>
    <button class="btn btn-primary mt-3" onclick="closeInterestPopup()">
      Go to Home
    </button>
  </div>
</div>

<style>
/* ---------- CONFIRM (NO GRADIENT) ---------- */
.confirm-overlay {
  position: fixed;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0,0,0,0.15);
  z-index: 9998;
}
.confirm-card {
  background: #fff;
  border-radius: 18px;
  padding: 28px 22px;
  width: 90%;
  max-width: 340px;
}

/* ---------- SUCCESS (GRADIENT) ---------- */
.interest-overlay {
  position: fixed;
  inset: 0;
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}
.interest-card {
  background: #fff;
  border-radius: 24px;
  padding: 40px 24px;
  width: 90%;
  max-width: 380px;
}
.check-icon {
  width: 80px;
  height: 80px;
  background: #4caf50;
  color: #fff;
  border-radius: 50%;
  font-size: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
}
</style>

<script>
/* ================= INTEREST FLOW ================= */

let selectedInterestId = null;

function openConfirmPopup(id) {
  selectedInterestId = id;
  document.getElementById('confirmPopup').classList.remove('d-none');
}

function closeConfirmPopup() {
  selectedInterestId = null;
  document.getElementById('confirmPopup').classList.add('d-none');
}

function confirmInterest() {
  console.log('Interest confirmed:', selectedInterestId);
  closeConfirmPopup();
  document.getElementById('interestPopup').classList.remove('d-none');
}

function closeInterestPopup() {
  document.getElementById('interestPopup').classList.add('d-none');
  window.location.href = '/project/home.php';
}

/* ================= FAVOURITES ================= */

function getFavs() {
  return JSON.parse(localStorage.getItem('favourites')) || [];
}
function setFavs(favs) {
  localStorage.setItem('favourites', JSON.stringify(favs));
}
function toggleFav(id) {
  let favs = getFavs();
  favs = favs.includes(id)
    ? favs.filter(f => f !== id)
    : [...favs, id];
  setFavs(favs);
  updateFavIcons();
}
function updateFavIcons() {
  const favs = getFavs();
  document.querySelectorAll('.fav-btn').forEach(btn => {
    const icon = btn.querySelector('i');
    favs.includes(btn.dataset.id)
      ? icon.classList.replace('bi-heart', 'bi-heart-fill')
      : icon.classList.replace('bi-heart-fill', 'bi-heart');
  });
}
updateFavIcons();
</script>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
