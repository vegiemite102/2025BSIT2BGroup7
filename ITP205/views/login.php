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
    <button onclick="window.location.href='index.php?page=sign'" class="signup-btn">
      Sign-up
    </button>
  </div>

  <p class="terms">
    <a href="#">Terms of services and data privacy</a>
  </p>
</div>