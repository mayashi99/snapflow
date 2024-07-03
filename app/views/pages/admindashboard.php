<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
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



    <div class="profile-container">
      <div class="profile">
        <img src="<?php echo URLROOT ?>/public/images/u.png" alt="user" width="50">
        <span class="username"></span>
        <div class="dropdown-content">
          <a href="#">Edit Profile</a>
          <a href="#">Settings</a>
          <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <h1>Admin Dashboard</h1>
  
  <div class="testimonial-container">
    <div class="testimonial">
      <img src="<?php echo URLROOT ?>/public/images/sales.jpg" alt="sales">
      <p class="testimonial-company">- Sales</p>
      <p class="testimonial-text">Rs.<?php echo $data['payments'][0]->total; ?></p>
    </div>

   
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/event.png" alt="event">
        <p class="testimonial-company">- Event Retrieval </p>
        <p class="testimonial-text"><?php echo $data['events'][0]->event; ?></p>
      </div>

      <div style="width: 300px;">
        <canvas id="myChart1"></canvas>
      </div>
    <div class="graph">
      <div class="chart">
        <div style="width: 500px;">
          <canvas id="myChart"></canvas>

        </div>
      </div>

      <div style="width: 400px;">
        <canvas id="myChart2"></canvas>
      </div>
    </div>
  </div>
    
    <div class="but">
    <button>
    <a href="<?php echo URLROOT ?>/PageController/admintable">Admintable</a>
    </button>
    <button>
    <a href="<?php echo URLROOT ?>/PageController/newpackage">New package</a>
    </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="<?php echo URLROOT ?>/public/js/barChart.js"></script>
    
    <script src="<?php echo URLROOT ?>/public/js/pieChart.js"></script>


    <script src="<?php echo URLROOT ?>/public/js/lineChart.js"></script>


</body>

</html>