<?php require_once 'config/database.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container py-5">
  <h3 class="mb-4">Reset Your Password</h3>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $token = $_POST['token'];
      $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $stmt = $connect->prepare("SELECT id FROM users WHERE email = ? AND verification_token = ?");
      $stmt->execute([$email, $token]);

      if ($stmt->rowCount() == 1) {
          $update = $connect->prepare("UPDATE users SET password = ?, verification_token = NULL WHERE email = ?");
          $update->execute([$new_password, $email]);

          echo "<div class='alert alert-success'>Password updated. You can <a href='login.php'>log in now</a>.</div>";
      } else {
          echo "<div class='alert alert-danger'>Invalid token or email.</div>";
      }
  }
  ?>

  <form method="post">
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Reset Token</label>
      <input type="text" name="token" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>New Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button class="btn btn-success">Reset Password</button>
  </form>
</div>

<?php include 'includes/footer.php'; ?>
