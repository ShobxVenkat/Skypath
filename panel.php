<?php
$pageTitle = "My Panel";
$currentPage = "panel";
require "partials/header.php";
?>

<div class="container py-3 pb-5">

  <!-- PANEL TABS -->
  <div class="d-flex gap-2 mb-4">
    <button class="btn btn-primary flex-fill"
            onclick="showTab('leads')"
            id="btnLeads">
      My Leads
    </button>
    <button class="btn btn-outline-primary flex-fill"
            onclick="showTab('listings')"
            id="btnListings">
      My Listings
    </button>
  </div>

  <!-- CONTENT AREA -->
  <div id="panelContent"></div>

</div>

<!-- ================= LEADS TEMPLATE ================= -->
<template id="leadsTemplate">
  <?php include 'partials/panel-leads.php'; ?>
</template>

<!-- ================= LISTINGS TEMPLATE ================= -->
<template id="listingsTemplate">
  <?php include 'partials/panel-listings.php'; ?>
</template>

<script>
function showTab(tab) {
  const content = document.getElementById('panelContent');

  document.getElementById('btnLeads').className =
    tab === 'leads'
      ? 'btn btn-primary flex-fill'
      : 'btn btn-outline-primary flex-fill';

  document.getElementById('btnListings').className =
    tab === 'listings'
      ? 'btn btn-primary flex-fill'
      : 'btn btn-outline-primary flex-fill';

  content.innerHTML =
    tab === 'leads'
      ? document.getElementById('leadsTemplate').innerHTML
      : document.getElementById('listingsTemplate').innerHTML;
}

/* ✅ DEFAULT LOAD */
document.addEventListener('DOMContentLoaded', () => {
  showTab('leads');
});
</script>

<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
