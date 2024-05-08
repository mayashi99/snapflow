<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_newpackage.css">
    <title>Create New Package</title>
   
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


<div class="container">
    <?php echo implode(', ', $data)?>
    <form action="<?php echo URLROOT ?>/PackageController/createPackage" method="POST" enctype="multipart/form-data">
        <h1>Create New Package</h1>
        <label for="pack_name">Package Name:</label><br>
        <input type="text" id="pack_name" name="pack_name" required><br><br>
  
        <label for="soft_copy_price">Soft Copy Price:</label><br>
        <input type="number" id="soft_copy_price" name="soft_copy_price" required><br><br>
        <label for="hard_copy_price">Hard Copy Price:</label><br>
        <input type="number" id="hard_copy_price" name="hard_copy_price" required><br><br>
        <input type="submit" value="Create Package" name="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer;">
    </form>

    <!-- JavaScript to redirect to packagetable.php -->
    <script>
        // Function to redirect to packagetable.php
        function redirectToPackageTable() {
            window.location.href = "<?php echo URLROOT ?>/PageController/packagetable";
        }

        // Attach the function to the click event of the button
        document.querySelector('input[type="submit"]').addEventListener('click', redirectToPackageTable);
    </script>
</div>
</body>

</html>