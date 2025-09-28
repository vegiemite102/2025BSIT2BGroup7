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
  <form method="post" action="index.php?page=home">
    <input name="username" 
    placeholder="Username" type="text" required/>
    <input name="password" 
    placeholder="Password" type="password" required/>

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
    <form method="post" action="index.php?page=home">
      <div class="form-grid">
        <input type="text" placeholder="First Name" name="first_name" required>
        <input type="text" placeholder="Middle Name" name="middle_name" required>
        <input type="text" placeholder="Last Name" name="last_name" required>

        <input type="text" placeholder="Username" class="col-3" name="username" required>

        <input type="email" placeholder="Email" class="col-2" name="email" required>
        <input type="text" placeholder="Phone" name="phone">

        <input type="text" placeholder="Home Address" class="col-2" name="address" required>
        <button type="button" class="upload-btn">Upload License</button>

        <input type="password" placeholder="Password" name="password" required>
        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
      </div>

      <div class="checkboxes">
        <label><input type="checkbox" name="terms" required> I agree to the Terms and Conditions</label>
        <label><input type="checkbox" name="newsletter"> Subscribe to newsletter</label>
      </div>

      <button type="submit" class="register-btn">Register</button>
    </form>
  </div>

  <div class="signup-image">
    <img src="images/RegisterImage.png" alt="Signup Image">
  </div>
</section>
<?php endif; ?>


