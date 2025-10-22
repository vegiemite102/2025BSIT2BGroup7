<?php

$username = $_GET['username'] ?? null;
$password = $_GET['password'] ?? null;

if ($username !== 'admin' || $password !== 'admin123') {
  header("Location: index.php?page=auth&mode=admin&error=unauthorized");
  exit;
}
?>

<div class="admin-banner">
  <img src="images/SettingsBanner.png" alt="Admin Dashboard Banner" class="banner">
  <div class="admin-banner-text"> 
    <h1>Admin Control Panel</h1>
    <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
  </div>
</div>

<section class="admin-container">
  <div class="admin-card">
    <h2>👥 User Management</h2>
    <p>View, edit, or remove user accounts (coming soon).</p>
  </div>

  <div class="admin-card">
    <h2>📊 Site Statistics</h2>
    <p>Overview of registered users, traffic reports, and more.</p>
  </div>

  <div class="admin-card">
    <h2>⚙️ Settings</h2>
    <p>Manage site-wide configurations and preferences.</p>
  </div>
</section>
