<?php include 'includes/header.php'; include 'includes/nav.php'; ?>
<link rel="stylesheet" type="text/css" href="assets/styles/forms.css">
 <main class="main">
 	<div class="container">
 		<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <div class="card shadow-sm p-4">
        <div class="text-center mb-4">
          <!-- Profile Image Upload -->
          <label for="profileImage" class="d-inline-block position-relative" style="cursor:pointer;">
            <img src="assets/images/user-avatar.png" id="profilePreview" class="rounded-circle mb-2" alt="User Avatar" width="100" height="100">
            <input type="file" id="profileImage" class="d-none" accept="image/*" onchange="previewProfileImage(event)">
            <div class="position-absolute bottom-0 end-0 bg-white border rounded-circle p-1">
              <i class="bi bi-camera-fill"></i>
            </div>
          </label>

          <h4 class="mb-0">Ahmed Bello</h4>
          <small class="text-muted">ahmed@example.com</small>
          <br>
          <!-- KYC Status -->
          <span class="badge bg-success mt-2">KYC Verified</span>
        </div>

        <hr>

        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" id="firstName" class="form-control" value="Ahmed" disabled>
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" id="lastName" class="form-control" value="Bello" disabled>
            </div>
          </div>

          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" id="age" class="form-control" value="28" disabled>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label d-flex justify-content-between align-items-center">
              Email Address
              <a href="#" data-bs-toggle="modal" data-bs-target="#changeEmailModal" class="small">Change Email</a>
            </label>
            <input type="email" id="email" class="form-control" value="ahmed@example.com" disabled>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" id="phone" class="form-control" value="+2348012345678">
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-success">Update Profile</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Changing Email -->
<div class="modal fade" id="changeEmailModal" tabindex="-1" aria-labelledby="changeEmailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="changeEmailLabel">Change Email</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <label for="newEmail" class="form-label">New Email</label>
          <input type="email" id="newEmail" class="form-control" placeholder="Enter new email">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update Email</button>
        </div>
      </form>
    </div>
  </div>
</div>


 <?php include 'includes/footer.php';?>	