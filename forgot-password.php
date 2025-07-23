  <?php require_once 'config/database.php'; ?>
  <?php include 'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/styles/login.css">
<div class="container py-5 reset-space">
  <img src="assets/images/reup-04.svg" class="mb-3" width="100px">
  <h3 class="mb-4 text-light">Forgot Password</h3>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];

      $stmt = $connect->prepare("SELECT id FROM users WHERE email = ?");
      $stmt->execute([$email]);

      if ($stmt->rowCount() == 1) {
          $token = bin2hex(random_bytes(6)); // 12-char token
          $update = $connect->prepare("UPDATE users SET verification_token = ? WHERE email = ?");
          $update->execute([$token, $email]);

          echo "<div class='alert alert-success'>Use this token to reset your password: <strong>$token</strong></div>";
      } else {
          echo "<div class='alert alert-danger'>No user found with that email.</div>";
      }
  }
  ?>
<style type="text/css">
  .reset-space{
    background: var(--green);
    padding: 100px 50px;
    border-radius: 10px;
  }
</style>
  <form method="post">
    <div class="mb-3">
      <label class="text-light mb-2">Email Address</label>
      <input type="email" name="email" class="form-control reup-login-input" required>
    </div>
    <button class="btn btn-success reup-login-submit">Generate Reset Token</button>
  </form>
</div>

<?php include 'includes/footer.php'; ?>
