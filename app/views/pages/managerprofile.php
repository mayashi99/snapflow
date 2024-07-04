<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_managerprofile.css">
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
      <center>
      <br><br>
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
        <h2>Details for Client</h2>
      </center>
      <form action="<?php echo URLROOT; ?>/clientDetailsAccept" method="post">
        <div class="form-group">
          <label for="photographer">Photographer Name:</label>
          <input type="text" id="photographer" name="photographer" placeholder="Photographer Name">
        </div>

        <div class="form-group">
          <label for="editor">Editor Information:</label>
          <input type="text" id="editor" name="editor" placeholder="Editor Information">
        </div>

        <div class="form-group">
  <div class="checkbox-group">
    <input type="checkbox" id="status" name="status" value="status">
    <label for="status">We accepted your request and already reserved a photographer and an editor</label>
  </div>
</div>


        <center>
        <br>
          <input type="submit" value="Submit" class="submit-btn"><br><br>
        </center>
      </form>
      <br><br>

      <hr>

      <center>
      <br><br>

        <h2>Manager Request for Photographer</h2>
      </center>
      <form action="" method="post">
        <div class="form-group">
          <label for="clientname">Client Name:</label>
          <input type="text" id="clientname" name="clientname" placeholder="Client Name">
        </div>

        <div class="form-group">
          <label for="eventname">Event Name:</label>
          <input type="text" id="eventname" name="eventname" placeholder="Event Name">
        </div>

        <div class="form-group">
          <label for="location">Location:</label>
          <input type="text" id="location" name="location" placeholder="Location">
        </div>

        <center>
          <input type="submit" value="Submit" class="submit-btn">
        </center>
      </form>
    </div>
  </div>
</body>

</html>
