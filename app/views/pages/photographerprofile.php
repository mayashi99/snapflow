<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_photographerprofile.css">
</head>

<body>
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
    <div class="profile-container">
      <div class="profile">
        <img src="<?php echo URLROOT ?>/public/images/u.png" alt="user" width="50">
        <span class="username"></span>
      </div>
    </div>
  </div>

  <div class="content-container">
    <div class="sidebar">
      <br><br>
      <center>
        <h2>Photographer Profile</h2><br>
      </center>
      <nav>
        <ul>
          <li>
            <a href="#photographer-info">
              <img src="<?php echo URLROOT ?>/public/images/u.png" alt="Photographer Info" width="35">
              Photographer Info
            </a>
          </li>
          <li>
            <a href="#upload">
              <img src="<?php echo URLROOT ?>/public/images/upload.png" alt="Upload" width="35">
              Upload
            </a>
          </li>
          <li>
            <a href="#edit-profile">
              <img src="<?php echo URLROOT ?>/public/images/edituser.png" alt="Edit Profile" width="35">
              Edit Profile
            </a>
          </li>
          <li>
            <a href="#settings">
              <img src="<?php echo URLROOT ?>/public/images/settings.png" alt="Settings" width="35">
              Settings
            </a>
          </li>
        </ul>
      </nav>
      <div class="logout">
        <a href="<?php echo URLROOT ?>/PageController/logout">
          <img src="<?php echo URLROOT ?>/public/images/signout.png" alt="Logout" width="35">
          Logout
        </a>
      </div>
    </div>

    <div class="main-content">
      <center>
      <br><br>
        <h2>Photographer Bio</h2>
      </center>
      <form method="post" action="">
        <div class="form-group">
          <label for="first-name">First Name :</label>
          <input type="text" id="first-name" class="name" name="first name" placeholder="John">
        </div>

        <div class="form-group">
          <label for="last-name">Last Name :</label>
          <input type="text" id="last-name" class="name" name="last name" placeholder="Doe">
        </div>

        <div class="form-group">
          <label for="contact">Contact Number :</label>
          <input type="text" id="contact" class="name" name="contact" placeholder="Contact">
        </div>

        <div class="form-group">
          <label for="email">E-Mail :</label>
          <input type="email" id="email" class="name" name="e-mail" placeholder="E-mail">
        </div>

        <div class="form-group">
          <label for="nic">NIC Number:</label>
          <input type="text" id="nic" class="name" name="nic" placeholder="NIC Number">
        </div>
        <br><br><br>

        <hr>

        <center>
        <br><br>
          <h2>Photographer Request</h2>
        </center>

        <div class="form-group">
          <label for="request-first-name">First Name :</label>
          <input type="text" id="request-first-name" name="first name" placeholder="First Name">
        </div>

        <div class="form-group">
          <label for="skill">Skill :</label>
          <input type="text" id="skill" name="skill" placeholder="Skill">
        </div>

        <div class="form-group">
          <label for="experience">Experience :</label>
          <input type="text" id="experience" name="experience" placeholder="Experience">
        </div>

        <div class="form-group">
          <label for="request-email">E-Mail :</label>
          <input type="email" id="request-email" class="name" name="e-mail" placeholder="E-mail">
        </div>

        <center>
          <input type="submit" value="Submit" class="submit-btn">
        </center>
      </form>
    </div>
  </div>
</body>

</html>
