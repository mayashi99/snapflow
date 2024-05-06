<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_imageupload.css">
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
        <div class="dropdown-content">
          <a href="#">Edit Profile</a>
          <a href="#">Settings</a>
          <a href="<?php echo URLROOT ?>/PageController/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>
  </div>
    

    <div class="img">
        
        <form action="<?php echo URLROOT; ?>/ImageController/uploadimage" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <div class="but">
            <input type="submit" value="Upload Image" name="submit">
            </div>
        </form>
    </div>

</body>

</html>