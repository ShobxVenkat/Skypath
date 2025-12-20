<?php
$pageTitle   = "Home";
$currentPage = "home";
require "partials/header.php";
?>

<style>
/* 🔍 Search */
.search-label {
  font-size: 18px;
  font-weight: 600;
  color: #1f3c88;
}

.search-input {
  font-size: 18px;
  padding: 14px 16px;
}

.search-icon {
  font-size: 20px;
  color: #333;
}

/* 🏷️ Category Tiles */
.category-tile {
  background: #2f66f3;
  border-radius: 16px;
  padding: 20px 22px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 6px 14px rgba(0,0,0,0.15);
}

.category-text {
  font-size: 22px;
  font-weight: 700;
  color: #fff200ff; /* aged-friendly yellow */
}

.category-icon {
  width: 70px;
  height: 70px;
  object-fit: contain;
  
}

.bgclr{
  background-color: white;
}
</style>

<main class="container py-3 pb-5">

  <!-- 🔍 Search Section -->
  <section class="mb-4">
    

    <div class="input-group shadow rounded-pill overflow-hidden">
      <input
        type="text"
        class="form-control border-0 search-input"
        placeholder="Search location, property, service"
      >
      <span class="input-group-text bg-white border-0 px-4">
        <i class="bi bi-search search-icon"></i>
      </span>
    </div>
  </section>

  <!-- 🖼️ Slider -->
  <section class="mb-4">
    <div id="locationSlider"
         class="carousel slide rounded overflow-hidden"
         data-bs-ride="carousel"
         data-bs-interval="2500">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
               class="d-block w-100"
               style="height:200px;object-fit:cover;">
        </div>

        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470"
               class="d-block w-100"
               style="height:200px;object-fit:cover;">
        </div>

        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429"
               class="d-block w-100"
               style="height:200px;object-fit:cover;">
        </div>

      </div>
    </div>
  </section>

  <!-- 🏷️ Categories -->
  <section>

    <!-- Real Estate -->
    <a href="real-estate.php" class="text-decoration-none">
      <div class="category-tile mb-3 ">
        <span class="category-text">Real Estate</span>
        <img src="images/estate.png" alt="Real Estate Icon" class=" bgclr category-icon">
      </div>
    </a>

    <!-- Hostels -->
    <a href="hostels.php" class="text-decoration-none">
      <div class="category-tile mb-3">
        <span class="category-text">Hostels</span>
        <img src="images/hostels.png" alt="Hostels Icon" class="bgclr category-icon">
      </div>
    </a>

    <!-- Services -->
    <a href="services.php" class="text-decoration-none">
      <div class="category-tile mb-3">
        <span class="category-text">Services</span>
        <img src="images/services.png" alt="Services Icon" class="category-icon">
      </div>
    </a>

  </section>

</main>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
