<?php

$username = $_GET['username'] ?? null;
$isAdmin = ($username === 'admin');
?>

<nav class="navbar">
  <div class="nav-left">
    <img src="images/logo.png" alt="Logo" class="Logo">

    <a href="index.php?page=home<?php echo $username ? '&username=' . urlencode($username) : ''; ?>">Home</a>
    <a href="index.php?page=map<?php echo $username ? '&username=' . urlencode($username) : ''; ?>">Map</a>
    <a href="index.php?page=statistics<?php echo $username ? '&username=' . urlencode($username) : ''; ?>">Statistics</a>
    <a href="index.php?page=about<?php echo $username ? '&username=' . urlencode($username) : ''; ?>">About</a>
    <a href="index.php?page=settings<?php echo $username ? '&username=' . urlencode($username) : ''; ?>">Settings</a>
  </div>

  <div class="nav-right">
    <?php if ($username): ?>
      <div class="user-dropdown">
        <button class="user-btn">
          <?php echo htmlspecialchars($username); ?> ▼
        </button>
        <div class="dropdown-content">
          <?php if ($isAdmin): ?>
            <a href="index.php?page=admin_dashboard&username=<?php echo urlencode($username); ?>">Admin Dashboard</a>
          <?php endif; ?>
          <a href="index.php?page=profile&username=<?php echo urlencode($username); ?>">Profile</a>
          <a href="index.php?page=auth&mode=login">Logout</a>
        </div>
      </div>
    <?php else: ?>
      <div class="auth-links">
        <a href="index.php?page=auth&mode=login">Login</a>
        <a href="index.php?page=auth&mode=signup">Sign Up</a>
      </div>
    <?php endif; ?>
  </div>
</nav>
