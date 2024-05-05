

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_admindashboard.css">
</head>

<body>
<?php var_dump($_SESSION['userData']) ?>
<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      <a href="<?php echo URLROOT ?>/PageController/blog">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

    <div class="profile-container">
        <div class="profile">
        <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="user" width="50">
            <span class="username">John Doe</span>
            <div class="dropdown-content">
                <a href="#">Edit Profile</a>
                <a href="#">Settings</a>
                <?php echo $_SESSION['email']  ?>
<a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<h1>Admin Dashboard</h1>
<div class="testimonial-container">
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p1.png" alt="company 1">
        <p class="testimonial-company">- Profit </p>
        <p class="testimonial-text">"Rs."</p> 
      </div>

      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p2.png" alt="company 2">
        <p class="testimonial-company">- Payment </p>
        <p class="testimonial-text">"Rs."</p>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </div>

    <div style="width: 300px;">
    <canvas id="myChart1"></canvas>
</div>
  
</div>
      </div>
      <div class="testimonial-container-1">
      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p3.png" alt="company 3">
        <p class="testimonial-company">- Sales</p>
        <p class="testimonial-text">"Rs."</p>
      </div>

      <div class="testimonial">
        <img src="<?php echo URLROOT ?>/public/images/p4.png" alt="company 4">
        <p class="testimonial-company">- Event Retrieval</p>
        <p class="testimonial-text">"Rs."</p>
      </div>
    
  </div>


<div class="chart">
<div style="width: 500px;">
    <canvas id="myChart"></canvas>


<div style="width: 400px;">
    <canvas id="myChart2"></canvas>
</div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="<?php echo URLROOT ?>/public/js/barChart.js"></script>
  
    <script src="<?php echo URLROOT ?>/public/js/pieChart.js"></script>


    <script src="<?php echo URLROOT ?>/public/js/lineChart.js"></script>

    
</body>

</html>