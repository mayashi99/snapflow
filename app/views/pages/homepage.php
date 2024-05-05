<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_homepage.css">
</head>

<body>

  <div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      <a class="active" href="#home">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

  <div class="center">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo URLROOT ?>/public/images/home 1.jpg" alt="wedding 1" width="100%" height="700">

      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo URLROOT ?>/public/images/baby 1.jpg" alt="girl" width="100%" height="700">

      </div>

      <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="<?php echo URLROOT ?>/public/images/home3.png" alt="wedding 3" width="100%" height="700">

      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <div class="text-block_1">

      <h2>Welcome to
        <b>SnapFlow</b>
        Event Photography !
      </h2>
    </div>
    <div class="text-block_2">
      <p>
      <h3>We are a photography company, creating memorirs through lens...</h3>
      </p>
    </div>

    <div class="centered">
      <form method="post" action="<?php echo URLROOT; ?>/OrganizationController/searchOrganization">
        <label for="date">Date:</label>
        <input class="data-input" type="date" id="date" name="date">
        <label for="category">Category:</label>
        <select class="select-input" id="category" name="type">
          <option value="Wedding">Wedding</option>
          <option value="Birthday">Birthday</option>
          <option value="Get">Get</option>
        </select>
        <button class="search-btn" name="submitSearch" value="submit" type="submit">Search</button>
      </form>


    </div>
  </div>

  <h1>Stories</h1><br>

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

  <div class="cent">
    <h1>Best Rating</h1>

    <div class="testimonial-container">
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p1.png" alt="company 1">
        <p class="testimonial-text">"Best photography,Nice photo editing & Good service..."</p>

        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p class="testimonial-company">- SHOOT</p>
      </div>
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p2.png" alt="company 2">
        <p class="testimonial-text">"Best photography,Nice photo editing"</p>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <p class="testimonial-company">- STUDIO </p>
      </div>
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p3.png" alt="company 3">
        <p class="testimonial-text">"Best photography,Nice photo editing"</p>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <p class="testimonial-company">- IPHOTO</p>
      </div>
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p4.png" alt="company 4">
        <p class="testimonial-text">"Nice photo editing & Good service..."</p>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="testimonial-company">- PHOTOO</p>
      </div>
      <!-- Add more testimonials as needed -->
    </div>
  </div>

  <h1>Contact Information</h1>
  <div class="contact">
    <div class="contact-item"> <img src="<?php echo URLROOT ?>/public/images/phone icon.jpg" alt="icon1" width="50px" height="50px">
      <h6>+9472638717<h6>
    </div>
    <div class="contact-item"> <img src="<?php echo URLROOT ?>/public/images/whatsapp.png" alt="icon2" width="50px" height="50px">
      <h6>Whatsapp</h6>
    </div>
    <div class="contact-item"> <img src="<?php echo URLROOT ?>/public/images/fb.jpg" alt="icon3" width="50px" height="50px">
      <h6>Facebook</h6>
    </div>

  </div>

  <script src="<?php echo URLROOT ?>/public/js/homepage.js"></script>
</body>

</html>