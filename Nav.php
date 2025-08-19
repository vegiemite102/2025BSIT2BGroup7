<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nav + Footer Example</title>

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* ensures footer stays at bottom */
    }

    /* ---------- NAV ---------- */
    .nav {
      background: #744FBB;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 20px;
    }

    .nav .link {
      display: flex;
      padding: 40px;
    }

    .nav a {
      color: white;
      text-decoration: none;
      margin-left: 40px;
      font-weight: bold;
      padding: 8px;
      font-size: 20px;
      transition: 0.2s ease-in-out;
    }

    .nav .logo {
      height: 50px;
    }

    /* individual hover colors */
    #home:hover { color: #FF8383; }
    #stats:hover { color: #DB8A8B; }
    #map:hover { color: #A7A1A5; }
    #about:hover { color: #7FB3B8; }
    #settings:hover { color: #5CC4CA; }

    @media (max-width: 600px) {
      .nav {
        flex-direction: column;
        align-items: center;
      }
      .nav .link {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
      }
    }

    /* ---------- FOOTER ---------- */
    footer {
      margin-top: auto;
      background-color: #463d56;
      color: #fff;
      padding: 20px 40px;
    }

    .footer-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    /* Logo */
    .logo-footer img {
      height: 40px;
    }

    /* App Store Buttons */
    .store-buttons {
      display: flex;
      gap: 10px;
    }
    .store-buttons img {
      height: 40px;
    }

    /* Socials */
    .social {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding-left: 20px;
      border-left: 1px solid #888;
    }

    .social p {
      margin: 0 0 10px 0;
      font-size: 14px;
      font-weight: bold;
    }

    .social-links {
      display: grid;
      grid-template-columns: auto auto;
      gap: 8px 20px;
    }

    .social-links a {
      display: flex;
      align-items: center;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
    }

    .social-links i {
      margin-right: 8px;
      font-size: 16px;
    }

    /* Divider line */
    .footer-divider {
      border-top: 1px solid #888;
      margin: 15px 0;
    }

    /* Bottom links */
    .footer-bottom {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      color: #ccc;
      flex-wrap: wrap;
    }
    .footer-bottom a {
      color: #ccc;
      text-decoration: none;
      margin: 0 5px;
    }
  </style>
</head>
<body>

  <!-- NAVIGATION -->
  <div class="nav">
    <img class="logo" src="C:/Users/LENOVO/Documents/Index/Vector.png" alt="Logo">
    <div class="link">
      <a href="#" id="home">Home</a>
      <a href="#" id="stats">Statistics</a>
      <a href="#" id="map">Map</a>
      <a href="#" id="about">About us</a>
      <a href="#" id="settings">Setting</a>
    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <div class="footer-container">
      <!-- Logo -->
      <div class="logo-footer">
        <img src="C:/Users/LENOVO/Documents/Index/Footer.png" alt="Pathfinder Logo">
      </div>

      <!-- App Store buttons -->
      <div class="store-buttons">
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
        <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
      </div>

      <!-- Socials -->
      <div class="social">
        <p>FOLLOW US</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-instagram"></i>@pathfinder.ph</a>
          <a href="#"><i class="fab fa-facebook"></i>pathfinder.ph</a>
          <a href="tel:09489674321"><i class="fas fa-phone"></i>0948 967 4321</a>
          <a href="mailto:pathfinder@gmail.com"><i class="fas fa-envelope"></i>pathfinder@gmail.com</a>
        </div>
      </div>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom">
      <p>© 2025 PATHFINDER. All rights reserved.</p>
      <p>
        <a href="#">PRIVACY POLICY</a> | 
        <a href="#">TERMS AND CONDITIONS</a>
      </p>
    </div>
  </footer>

</body>
</html>
