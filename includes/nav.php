  <nav class="navbar navbar-dark bg-success d-md-none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets/images/reup-04.svg" width="80px" alt="ReUp Logo">
      </a>
      <button class="navbar-toggler" type="button" id="sidebarToggle">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="sidebar d-flex flex-column" id="sidebarMenu">
    <div class="text-center mb-4 d-none d-md-block">
      <img src="assets/images/reup-04.svg" width="100px" alt="ReUp Logo">
    </div>
    <nav class="nav flex-column">
      <a class="nav-link active" href="dashboard.php"><i data-lucide="home"></i> Dashboard</a>
      <a class="nav-link" href="buy_airtime.php"><i data-lucide="smartphone"></i> Airtime & Data</a>
      <a class="nav-link disabled" href="#"><i data-lucide="zap"></i> Electricity</a>
      <a class="nav-link" href="wallet.php"><i data-lucide="wallet"></i> Wallet</a>
      <a class="nav-link" href="#"><i data-lucide="repeat"></i> Transactions</a>
      <a class="nav-link" href="profile.php"><i data-lucide="user"></i> Profile</a>
      <a class="nav-link" href="#"><i data-lucide="settings"></i> Settings</a>
      <hr class="text-light my-3">
      <a class="nav-link logout" href="logout.php"><i data-lucide="log-out"></i> Logout</a>
    </nav>
  </div>
  <script src="https://unpkg.com/lucide@latest"></script>