<?php
// auth.php
$mode = $_GET['mode'] ?? 'login';
?>

<?php if ($mode === 'login'): ?>
<div class="homewallpaper">
  <img src="images/LandingPagePic.png" alt="Pathfinder Banner" class="banner">
</div>

<div class="login-box">
  <h2>LOG IN</h2>

  <!-- Login form -->
  <form action="index.php?page=home" method="post">
    <input type="text" placeholder="Email or Username" required>
    <input type="password" placeholder="Password" required>
    <div class="buttons">
      <button type="submit" class="login-btn">Log-in</button>
    </div>
  </form>

  <!-- Separate button for Sign-up -->
  <div class="buttons">
    <button onclick="window.location.href='index.php?page=auth&mode=signup'" class="signup-btn">
      Sign-up
    </button>
  </div>

  <p class="terms">
    <a href="#">Terms of services and data privacy</a>
  </p>
</div>

<?php elseif ($mode === 'signup'): ?>
<section class="signup-container">
  <div class="signup-form">
    <h2>Create Your Account</h2>
    <form>
      <div class="form-grid">
        <input type="text" placeholder="First Name">
        <input type="text" placeholder="Middle Name">
        <input type="text" placeholder="Last Name">

        <input type="text" placeholder="Username" class="col-3">

        <input type="email" placeholder="Email" class="col-2">
        <input type="text" placeholder="Phone">

        <input type="text" placeholder="Home Address" class="col-2">
        <button type="button" class="upload-btn">Upload License</button>
      </div>

      <div class="checkboxes">
        <label><input type="checkbox"> I agree to the Terms and Conditions</label>
        <label><input type="checkbox"> Subscribe to newsletter</label>
      </div>

      <button type="submit" class="register-btn">Register</button>
    </form>
  </div>

  <div class="signup-image">
    <img src="images/RegisterImage.png" alt="Signup Image">
  </div>
</section>
<?php endif; ?>
