<?php
$currentPage = $currentPage ?? "";
?>


<?php
$isLoggedIn = false; // later session se aayega
?>

<?php if (!$isLoggedIn): ?>
  <a href="login.php" class="nav-item <?= $currentPage=='login'?'active':'' ?>">
    <i class="bi bi-box-arrow-in-right"></i>
    Login
  </a>
<?php else: ?>
  <a href="profile.php" class="nav-item <?= $currentPage=='profile'?'active':'' ?>">
    <i class="bi bi-person-fill"></i>
    Profile
  </a>
<?php endif; ?>

<style>
.bottom-nav {
  background: #2f66f3;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}
.nav-item {
  flex: 1;
  text-align: center;
  color: rgba(255,255,255,0.8);
  font-size: 12px;
  text-decoration: none;
  cursor: pointer;
}

.nav-item i {
  font-size: 22px;
  display: block;
  margin-bottom: 2px;
}

.nav-item.active {
  color: #fff;
  font-weight: 600;
}

.panel-menu {
  position: fixed;
  bottom: 78px;   /* nav height + gap */
  left: 0;
  right: 0;
  background: #fff;
  box-shadow: 0 -6px 20px rgba(0,0,0,0.15);
  border-radius: 16px 16px 0 0;
  display: none;
  z-index: 999;   /* nav se thoda kam */
  transition: transform 0.25s ease, opacity 0.25s ease;
}

.panel-menu a {
  display: block;
  padding: 14px 20px;
  border-bottom: 1px solid #eee;
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.panel-menu a:last-child {
  border-bottom: none;
}
</style>

<!-- PANEL SUB MENU -->
<div id="panelMenu" class="panel-menu">
  <a href="my-listings.php">
    <i class="bi bi-house-door-fill text-primary me-2"></i>
    My Listings
  </a>
  <a href="my-leads.php">
    <i class="bi bi-people-fill text-success me-2"></i>
    My Leads
  </a>
</div>

<nav class="bottom-nav fixed-bottom py-2">
  <div class="container">
    <div class="d-flex justify-content-between">

      <a href="index.php" class="nav-item <?= $currentPage=='home'?'active':'' ?>">
        <i class="bi bi-house-fill"></i>
        Home
      </a>

      <a href="liked.php" class="nav-item <?= $currentPage=='liked'?'active':'' ?>">
        <i class="bi bi-heart-fill"></i>
        Liked
      </a>

      <a href="login.php" class="nav-item <?= $currentPage=='login'?'active':'' ?>">
  <i class="bi bi-box-arrow-in-right"></i>
  Login
</a>

      <!-- PANEL BUTTON -->
     <!-- PANEL BUTTON -->
<a href="panel.php" class="nav-item <?= $currentPage=='panel'?'active':'' ?>">
  <i class="bi bi-grid-fill"></i>
  My Panel
</a>


      <a href="profile.php" class="nav-item <?= $currentPage=='profile'?'active':'' ?>">
        <i class="bi bi-person-fill"></i>
        Profile
      </a>

    </div>
  </div>
</nav>

<script>
function togglePanelMenu(e) {
  e.stopPropagation();
  const menu = document.getElementById('panelMenu');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

document.addEventListener('click', () => {
  document.getElementById('panelMenu').style.display = 'none';
});
</script>
