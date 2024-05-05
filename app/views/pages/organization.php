<!DOCTYPE html>
<html>

<head>
  <title>organization</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_organization.css">
</head>

<body>
<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      <a href="<?php echo URLROOT ?>/PageController/homepage">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

  <h1>Photography Organization</h1>

  <div class="testimonial-container">

  <?php foreach ($data as $organization) :  
  ?>
    <div class="testimonial">
      <img src="<?php echo $organization->img_url; ?>">
      <p class="testimonial-text"><?php echo $organization->description; ?></p>

      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <p class="testimonial-company"><?php echo $organization->orname; ?>  </p>
    </div>
    <?php endforeach; ?>
  
  </div>
  </div>

  <div class="row">
    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/home 5.jpg" alt="wedding">
      <img src="<?php echo URLROOT ?>/public/images/image6.jpg" alt="rock">


    </div>
    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/home 8.jpg" alt="uno">
      <img src="<?php echo URLROOT ?>/public/images/image4.jpg" alt="ocun">
      <img src="<?php echo URLROOT ?>/public/images/home 6.jpg" alt="rock">
    </div>

    <div class="column">
      <img src="<?php echo URLROOT ?>/public/images/image8.jpg" alt="falls">
      <img src="<?php echo URLROOT ?>/public/images/image_2.jpg" alt="ocun">
      <img src="<?php echo URLROOT ?>/public/images/image7.jpeg" alt="wedding">
    </div>
  </div>
  </div>

 
  <script src="<?php echo URLROOT ?>/public/js/organization.js"></script>

</body>

</html>