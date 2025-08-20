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
      background-image: linear-gradient(#0C0641, #243886, #1C0E38); /* BACKGROUND COLOR*/
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
      padding: 8px;
	  padding-right: 50px;
    }

    .nav a {
      color: white;
      text-decoration: none;
      margin-left: 40px;
      font-weight: bold;
      padding: 8px;
      font-size: 15px;
      transition: 0.2s ease-in-out;
    }

    .nav .logo {
      height: 30px;
    }

    /* individual hover colors */
    #home:hover { color: #FF8383; }
    #stats:hover { color: #DB8A8B; }
    #map:hover { color: #A7A1A5; }
    #about:hover { color: #7FB3B8; }
    #settings:hover { color: #5CC4CA; }


    .HOME-container {                                /*////////////////////////////////////////*/
    text-align: center;
    margin-top: 40px;
    font-size: 20px;
    color: #ffffff;
    }

    .HA1 img {                                /*////////////////////////////////////////*/
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      text-align: center;
      margin-top: 80px;
    }

    .HOME-container2 {                                /*////////////////////////////////////////*/
    text-align: center;
    margin-top: 100px;
    font-size: 25px;
    color: #ffffff;
    }

    .HA2 img {                                /*////////////////////////////////////////*/
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      text-align: center;
      margin-top: 120px;
    }


    .HOME-container3 {                                /*////////////////////////////////////////*/
    text-align: center;
    margin-top: 50px;
    font-size: 20px;
    color: #ffffff;
    }

    .HA3 img {                                /*////////////////////////////////////////*/
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
      text-align: center;
      margin-top: 90px;
    }


    .HOME-container4 {                                /*////////////////////////////////////////*/
    text-align: center;
    margin-top: 20px;
    font-size: 30px;
    color: #ffffff;
    }

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

    .footer-container .logo{
      height: 40px;
    }

    .store-buttons {
      display: flex;
      gap: 10px;
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
    <img class="logo" src="C:\Users\MSI i7\Downloads\NEW CODE\TESTERS\Logo.png" alt="Logo">
    <div class="link">
      <a href="#" id="home">Home</a>
      <a href="#" id="stats">Statistics</a>
      <a href="#" id="map">Map</a>
      <a href="#" id="about">About us</a>
      <a href="#" id="settings">Setting</a>
    </div>
  </div>

    <!-- About us details -->
     <div class="HOME-container">
     <h1 style="color: rgb(241, 193, 0);">DAILY DASHBOARD</h1>
        </div>

  <!-- About us 1st pic -->
    <div class="HA1">
    <img src="C:\Users\MSI i7\Downloads\NEW CODE\H1.png" alt="Pathfinder Banner" class="banner">
  </div>

    <!-- About us details 2 -->
     <div class="HOME-container2">
        <h1 style="color: rgb(241, 193, 0);">Car Crash at the Cathedral</h1>
        <p>BACOLOD City – A sport utility vehicle (SUV) carrying a former couple figured in a road accident<br> in front of the San Sebastian Cathedral here around 2:30 a.m. on Friday, July 18.</p>
        </div>

  <!-- About us 2nd  pic -->
    <div class="HA2">
    <img src="C:\Users\MSI i7\Downloads\NEW CODE\H2.png" alt="Pathfinder Banner" class="banner">
  </div>

    <!-- About us details 3 -->
     <div class="HOME-container3">
        <h1 style="color: rgb(241, 193, 0);">New Road in Bacolod City</h1>
        <p>Ginapahibalo ang publiko nga bukas kag pwede na maagyan ang Bacolod-Negros Occidental Economic Highway.<br>
    Ini nga dalan nagasugod sa Sum-Ag pakadto Cabug, Handumanan,<br> border sang Mansilingan-Murcia, Vista Alegre, Estefania, kag nagatapos sa Bata-Talisay.
        </div>

  <!-- About us 3rd pic -->
    <div class="HA3">
    <img src="C:\Users\MSI i7\Downloads\NEW CODE\H3.png" alt="Pathfinder Banner" class="banner">
  </div>

    <!-- About us details 4 -->
     <div class="HOME-container4">
      <h1 style="color: rgb(241, 193, 0);">MEET OUR TEAM</h1>
        <p>Juro Alacapa - Web Designer <br>
        Kenneth Ciriaco - Software Engineer <br>
        Regiemer Garde - Website Developer</p>
       </div>


  <!-- FOOTER -->
  <footer>
    <div class="footer-container">   
        <img class="logo" src="C:/Users/LENOVO/Documents/Index/Logo.png" alt="Pathfinder Logo">

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
