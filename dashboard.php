<?php
//include 'init.php';

//if (!isset($_SESSION['user_id'])) {
//	echo "<script>alert('no session')</script>";
//header("location:login.php");
//exit;
//}

//$userName = $_SESSION['user_name'];
//$wallet_balance = $_SESSION['wallet_balance'];
?>

<?php include 'includes/header.php'; include 'includes/nav.php'; ?>

  <main class="main">
	<h2 class="text-center">Welcome, <?php echo 'Aare Bellah';//htmlspecialchars($userName); ?></h2>
	<p class="lead text-center mt-3">your <span class="wb">wallet balance is <strong>₦20,000<?php //echo number_format($wallet_balance, 2); ?></strong></span></p>
	<!--User lider-->
	<div class="user-slider">
		<div class="container mt-4">
  <div id="topSlider" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 1000px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/reup-banners-01.png" class="d-block w-100 img-fluid" alt="Banner 1" style="max-height: 100px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="assets/images/reup-banners-02.png" class="d-block w-100 img-fluid" alt="Banner 2" style="max-height: 100px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="assets/images/reup-banners-01.png" class="d-block w-100 img-fluid" alt="Banner 3" style="max-height: 100px; object-fit: cover;">
      </div>
    </div>
  </div>
</div>

	</div>
	<div class="actions mt-5">
		<div class="container mt-4">
  <div class="row g-4">
    <!-- Action 1 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="smartphone" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Buy Airtime</h5>
      </div>
    </div>

    <!-- Action 2 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="wifi" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Buy Data</h5>
      </div>
    </div>

    <!-- Action 3 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="zap" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Electricity</h5>
      </div>
    </div>

    <!-- Action 4 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="wallet" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Fund Wallet</h5>
      </div>
    </div>

    <!-- Action 5 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="repeat" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Transactions</h5>
      </div>
    </div>

    <!-- Action 6 -->
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="user" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">My Profile</h5>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4">
      <div class="card shadow-sm text-center p-4 h-100">
        <i data-lucide="user" class="mb-3" style="width: 32px; height: 32px;"></i>
        <h5 class="card-title">Referrals</h5>
      </div>
    </div>
  </div>
</div>

	</div>
  <script>
  const slider = document.getElementById('topSlider');
  const carousel = new bootstrap.Carousel(slider, {
    interval: 3000,
    ride: 'carousel'
  });
</script>
<?php include 'includes/footer.php';?>	