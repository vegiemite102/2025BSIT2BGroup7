<?php
// views/auth.php
// GET-based auth page (demo). No sessions used here.

$mode = $_GET['mode'] ?? 'login';
$error = $_GET['error'] ?? null;

// Optional: show friendly messages from redirects
$info = $_GET['info'] ?? null;
?>

<?php if ($mode === 'login'): ?>
<div class="homewallpaper">
  <img src="images/LandingPagePic.png" alt="Pathfinder Banner" class="banner">
</div>

<div class="login-box">
  <h2>LOG IN</h2>

  <?php if ($error): ?>
    <p class="error" style="color:#ffcccc; text-align:center;"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <?php if ($info): ?>
    <p class="info" style="color:#cfe8d5; text-align:center;"><?php echo htmlspecialchars($info); ?></p>
  <?php endif; ?>

  <!-- Login form: submits via GET to index.php?page=home&username=... -->
  <form method="get" action="index.php">
    <input type="hidden" name="page" value="home">
    <input name="username" placeholder="Username" type="text" required/>
    <input name="password" placeholder="Password" type="password" required/>

    <div class="buttons">
      <button type="submit" class="login-btn">Log-in</button>
    </div>
  </form>

  <!-- Buttons for other modes -->
  <div class="buttons">
    <button onclick="window.location.href='index.php?page=auth&mode=signup'" class="signup-btn">Sign-up</button>
    <button onclick="window.location.href='index.php?page=auth&mode=admin'" class="admin-btn">Admin Login</button>
  </div>

  <p class="terms">
    <a href="#">Terms of services and data privacy</a>
  </p>
</div>

<?php elseif ($mode === 'signup'): ?>
<section class="signup-container">
  <div class="signup-form">
    <h2>Create Your Account</h2>

    <!-- Signup form: submits via GET to index.php?page=home&username=... -->
    <form method="get" action="index.php">
      <input type="hidden" name="page" value="home">
      <div class="form-grid">
        <input type="text" placeholder="First Name" name="first_name" required>
        <input type="text" placeholder="Last Name" name="last_name" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="Password" name="password" required>
      </div>

      <div class="buttons">
        <button type="submit" class="signup-btn">Sign-up</button>
      </div>
    </form>

    <div class="buttons">
      <button onclick="window.location.href='index.php?page=auth&mode=login'" class="login-btn">Back to Login</button>
    </div>
  </div>
</section>

<?php elseif ($mode === 'admin'): ?>
<div class="homewallpaper">
  <img src="images/LandingPagePic.png" alt="Pathfinder Banner" class="banner">
</div>

<div class="login-box">
  <h2>ADMIN LOGIN</h2>

  <?php if ($error): ?>
    <p class="error" style="color:#ffcccc; text-align:center;"><?php echo htmlspecialchars($error); ?></p>
  <?php endif; ?>

  <!-- Admin login form: submits via GET to index.php?page=admin_dashboard&username=... -->
  <form method="get" action="index.php">
    <input type="hidden" name="page" value="admin_dashboard">
    <input name="username" placeholder="Admin Username" type="text" required/>
    <input name="password" placeholder="Password" type="password" required/>

    <div class="buttons">
      <button type="submit" class="login-btn">Log-in as Admin</button>
    </div>
  </form>

  <div class="buttons">
    <button onclick="window.location.href='index.php?page=auth&mode=login'" class="login-btn">Back to User Login</button>
  </div>
</div>
<?php endif; ?>
