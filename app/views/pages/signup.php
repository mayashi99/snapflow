<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
      <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_signup.css">
</head>
<body>

<div class="sing">
    <div class="sing1">
    <h1 >Signup</h1>
    <form method="post" action="<?php echo URLROOT; ?>/UserController/signUp">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        <br>
        <br>
        <input type="radio" name="role" value="CUSTOMER">Customer
        <input type="radio" name="role" value="ADMIN">Admin
        <input type="radio" name="role" value="MANAGER">Manager
        <input type="radio" name="role" value="EDITOR">Editor
        <input type="radio" name="role" value="PHOTOGRAPHER">Photographer
        <br>
        <br>
        
        <div class="button">
        <button name="submitSignup" value="submitSignup">Signup</button>
       
    </form>
    </div>
    </div>
</div>

<script src="<?php echo URLROOT ?>/public/js/form.js"></script>
</body>
</html>