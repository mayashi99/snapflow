<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" conten="width=device-width, initial-scale=1,0">
   <title>User-Profile Menu</title>
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_userprofile.css">
</head>
<body>
<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
    </div>
    <div>
      <a class="active" href="#home">Home</a>
      <a href="#Blog">Blog</a>
      <a href="#About us">About Us</a>
      <a href="#Packages">Packages</a>
    </div>
       <!--<img src="<?php echo URLROOT ?>/public/images/user1.jpg" class="user-pic" alt="user" width="100">

       <div class="sub-menu-wrap">
        <div class="sub-menu">
          <div class="user-info">
            <img src="images/user1.jpg">
            <h2>Anumi Inupama</h2>-->
            <div class="profile-container">
        <div class="profile">
        <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="user" width="50">
            <span class="username">Anumi Inupama</span>
            <div class="dropdown-content">
                <a href="#">Edit Profile</a>
                <a href="#">Settings</a>
       
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
</div>
</div>
</div>
</div>

  <!--<div><h4><span class="a"><img src=""></span> User Info</h4></div><br>
  <div><h4><span class="b"><img src="images/editing.jpg"></span>Editing</h4></div><br>
  <div><h4><span class="c"><img src="images/settings.jpg"></span>Settings</h4></div><br>
  <div><h4><span class="d"><img src="images/download_folders.jpg"></span>Download Folders</h4></div><br>
    </div>--><br><br>
    <div style="background-color: blueviolet; width: 1503px;height: 780px;">
  <div clsss="div2" style="background-color : rgb(187, 204, 231) ; width: 203px;height: 780px;float :left">
   
  <center>
    <br>
  <h2>User Profile</h2><br><br>
</center>
<form method = "post" action = ""> 
<center>
<table>
  <tr>
<td width="60px"><img src="<?php echo URLROOT ?>/public/images/user.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px; font-size: medium; font-weight: bold;" href="#photographer info"> User Profile Info</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/editing.jpg" alt="logo" width="35" ></td>
<td><a style=" color: #151515;text-decoration: none;font-size: 17px;  font-size: medium; font-weight: bold;" href="#photographer info"> Edit Profile</a></td>
  <tr>

  <tr>
<td><img src="<?php echo URLROOT ?>/public/images/settings.png" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;  font-size: medium; font-weight: bold;" href="#edit profile"> Settings</a></td>
  <tr>


<tr>
<td><img src="<?php echo URLROOT ?>/public/images/download_folders.jpg" alt="logo" width="35" ></td>
  <td><a style=" color: #151515;text-decoration: none;font-size: 17px;  font-size: medium; font-weight: bold;" href="#setting">Download Folders</a></td>
  <tr>

  </table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <tr>
  <td width="60px"><img src="<?php echo URLROOT ?>/public/images/signout.png" alt="logo" width="35" ></td>
  <td><a  style=" color: #151515;text-decoration: none;font-size: 17px; font-size: medium; font-weight: bold;"href="<?php echo URLROOT ?>/PageController/logout">Logout</a></td>
  </tr>
</table>
</center>
</div>

    <div class="center">
        <div class="profile-info">
            <h3>Anumi Inupama</h3>
            <br> <br>
            <form action="">
                <label for="fname"><b>First Name:</b></label>
              <br>
                <input type="text" id="fname" name="fname" value="Anumi" required><br><br>
                <label for="lname"><b>Last Name:</b></label>
             <br>
                <input type="text" id="lname" name="lname" value="Inupama" required><br><br>
                <label for="email"><b>Email Address:</b></label>
            <br>
                <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid E-mail" required><br><br>
                <label for ="number"><b>Phone Number:</b></label>
            <br>
                <input type="tel" id="number" name="number" pattern="[0-9](10)" title="Please enter valid mobile number" required><br><br>
                <label for="NIC"><b>NIC Number:</b></label>
            <br>
                <input type="NIC" id="NIC" name="NIC" required><br><br>
                <label for="EmergContact"><b>Emergency Contact:</b></label>
            <br>
                <input type="EmergContact" id="EmergContact" name="EmergContact" required><br><br>

                <input type="submit" value="save changes">
        </form>
        </div>
</div>

<!--adding a model to feedback-->
<div class="modal" id="add-feedback-modal" style="display: block;">
<div class="modal_content">
  <div class="modal_header-left">
    <h1>Add Feedback</h1>
</div>
<div class="modal_body">
  <form id="add-feedback-form" class="form">
    <div class="form_group">
      <label for="name">Your Name</label>
      <input type="text" name="name" id="name" class="form_input">
</div>
<div class="form_group">
  <label for="title">Feedbacl Title</label>
  <input type="text" name="title" id="tittle" class="form_input">
</div>
<div class="form_group">
  <label for="text">Feedback Details</label>
  <textarea name="text" id="text" class="form_input"></textarea>
</div>
</form>
</div>
<div class="modal_footer">
  <button class="modal_button feedback_button" id="add-button">Add Feedback</button>
  <button class="modal_button feedback_button modal_button_cancel" id ="cancel-button">Cancel</button>
</div>
</div>
</div>
</div>
<!--add js part-->

</body>
</html>
          