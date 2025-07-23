<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
require_once '../config/Database.php';
require_once '../classes/Admin.php';

$db = new Database();
$connect = $db->connect();
$admin = new Admin($connect);

include 'includes/header.php';
include 'includes/sidebar.php';

// FETCH DASHBOARD DATA
$totalUsers = $connect->query("SELECT COUNT(*) FROM users")->fetchColumn();
//$activeToday = $connect->query("SELECT COUNT(*) FROM users WHERE DATE(last_login) = CURDATE()")->fetchColumn();
$activeToday = 0;
$totalTransactions = $connect->query("SELECT COUNT(*) FROM transactions")->fetchColumn();
$todayEarnings = $connect->query("SELECT SUM(amount) FROM transactions WHERE DATE(created_at) = CURDATE()")->fetchColumn();
?>

<main>
  <h3>Dashboard</h3>
  <div class="stats">
    <div>Total Users: <?= $totalUsers ?></div>
    <div>Users Active Today: <?= $activeToday ?></div>
    <div>Total Transactions: <?= $totalTransactions ?></div>
    <div>Today's Earnings: ₦<?= number_format($todayEarnings ?: 0, 2) ?></div>
  </div>
</main>
<div id="live-users"></div>

<script>
function fetchLiveUsers() {
  fetch('ajax/live_users.php')
    .then(response => response.json())
    .then(data => {
      let html = `<h4>Live Users (Last 5 mins)</h4><ul>`;
      if (data.length === 0) {
        html += `<li>No active users</li>`;
      } else {
        data.forEach(user => {
          html += `<li>${user.full_name} (${user.email}) — Active at ${user.last_active}</li>`;
        });
      }
      html += `</ul>`;
      document.getElementById('live-users').innerHTML = html;
    });
}

setInterval(fetchLiveUsers, 5000); // refresh every 5 seconds
fetchLiveUsers(); // initial call
</script>

<?php include 'includes/footer.php'; ?>
