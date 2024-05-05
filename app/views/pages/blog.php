<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_blogs.css">
  <script src="<?php echo URLROOT ?>/public/js/pkgfunction.js"></script>

</head>

<body>

<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      
      <a href="<?php echo URLROOT ?>/PageController/home">Home</a>
      <a class="active" href="#blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>


  <div class="ribbon">
    <span>What are you looking for?</span>
  </div>



  <div class="container">

    <div class="buttons">

      <div class="button-container">
        <button type="button" onclick="selectPackage(1)">
          <img src="<?php echo URLROOT ?>/public/images/wedding_photo.jpg" alt="Wedding" width="100" height="100">
          <span>Wedding</span>
        </button>

        <button type="button" onclick="selectPackage(2)">
          <img src="<?php echo URLROOT ?>/public/images/birthday_photo.jpg" alt="Birthday" width="100" height="100">
          <span>Birthday</span>
        </button>

        <button type="button" onclick="selectPackage(3)">
          <img src="<?php echo URLROOT ?>/public/images/get_together_photo.jpg" alt="Get Together" width="100" height="100">
          <span>Get Together</span>
        </button>

        <button type="button" onclick="selectPackage(4)">
          <img src="<?php echo URLROOT ?>/public/images/graduation_photo.jpg" alt="Graduation" width="100" height="100">
          <span>Graduation</span>
        </button>

        <button type="button" onclick="selectPackage(5)">
          <img src="<?php echo URLROOT ?>/public/images/party_photo.jpg" alt="Party" width="100" height="100">
          <span>Party</span>
        </button>

        <button type="button" onclick="selectPackage(6)">
          <img src="<?php echo URLROOT ?>/public/images/corporate_event_photo.jpg" alt="Corporate Event" width="100" height="100">
          <span>Corporate Event</span>
        </button>

        <button type="button" onclick="selectPackage(7)">
          <img src="<?php echo URLROOT ?>/public/images/event.jpg" alt="Custom" width="100" height="100">
          <span>Custom</span>
        </button>

      </div>

    </div>

    <div class="display" id="display">
      <div class="logo-container">
        <img src="<?php echo URLROOT ?>/public/images/photography-logo.png" alt="photography-logo" width="150" height="150">
      </div>
      <div class="display-text">
        <?php echo $displayContent; ?>
        Capture your special moments with our professional photography packages!
      </div>
    </div>

  </div>

</body>

</html>