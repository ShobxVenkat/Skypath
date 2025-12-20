<?php
$type = $_GET['type'] ?? 'Property';
require "partials/header.php";
?>

<div class="container py-4 pb-5">
  <div class="card shadow-sm border-0">
    <div class="card-body p-4">
      <h4 class="fw-bold text-center mb-4">Booking</h4>

      <form id="listingForm" onsubmit="handleSubmit(event)">

  <div class="mb-3">
    <label class="fw-semibold">Category</label>
    <select class="form-select" required>
      <option value="">Select Category</option>
      <option>Real Estate</option>
      <option>Hostel</option>
      <option>Services</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="fw-semibold">Sub Category</label>
    <select class="form-select" required>
      <option value="">Select Sub Category</option>
      <option><?= htmlspecialchars($type) ?></option>
    </select>
  </div>

  <div class="mb-3">
    <label class="fw-semibold">Type</label>
    <select class="form-select" required>
      <option value="">Select Type</option>
      <option>1 BHK</option>
      <option>2 BHK</option>
      <option>3 BHK</option>
    </select>
  </div>

  <div class="mb-4">
    <label class="fw-semibold mb-2">Rules</label>

    <div class="form-check">
      <input class="form-check-input rule-check" type="checkbox" required>
      <label class="form-check-label">No illegal activities</label>
    </div>

    <div class="form-check">
      <input class="form-check-input rule-check" type="checkbox" required>
      <label class="form-check-label">Follow society rules</label>
    </div>
  </div>

  <button id="submitBtn"
          type="submit"
          class="btn btn-primary w-100 rounded-pill py-2"
          disabled>
    Submit Details
  </button>
</form>


<!-- Success Toast -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index:1055">
  <div id="successToast" class="toast text-bg-success border-0">
    <div class="d-flex">
      <div class="toast-body">
        ✅ Listing submitted successfully!
      </div>
      <button type="button"
              class="btn-close btn-close-white me-2 m-auto"
              data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>



      
    </div>
  </div>
</div>
<script>
  const form = document.getElementById('listingForm');
  const submitBtn = document.getElementById('submitBtn');

  function checkForm() {
    submitBtn.disabled = !form.checkValidity();
  }

  form.addEventListener('input', checkForm);
  form.addEventListener('change', checkForm);

  function handleSubmit(e) {
    e.preventDefault();

    if (!form.checkValidity()) return;

    const toast = new bootstrap.Toast(
      document.getElementById('successToast'),
      { delay: 2500 }
    );
    toast.show();

    form.reset();
    submitBtn.disabled = true;
  }
</script>


<?php require "partials/bottom-nav.php"; ?>
<?php require "partials/footer.php"; ?>
