<?php
require_once '../app/models/Package.php';

// Dummy data for demonstration
$pack = new Package;
$packages = $pack->getPackages();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package table</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_packages.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_packagetable.css">
</head>

<body>

    <div class="topnav">
        <div class="test">
            <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
        </div>
        <div>
            <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
            <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
            <a href="<?php echo URLROOT ?>/PageController/homepage">Home</a>
            <a class="active" href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
        </div>
        <div class="log">
            <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
            <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
        </div>
    </div>

    <div class="content">
        <h1>Our Packages</h1>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th style="width:30%">Name</th>
                        <th>Soft Copy Price</th>
                        <th>Hard Copy Price</th>
                        <th style="width:20%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($packages as $package): ?>
                        <tr>
                            <td><?php echo $package->pack_name; ?></td>
                            <td><?php echo $package->soft_copy_price; ?></td>
                            <td><?php echo $package->hard_copy_price; ?></td>
                            <td style="text-align: center">
                                <a class="update-button"
                                    href="<?php echo URLROOT ?>/PageController/editpackage?code=<?php echo $package->pack_code; ?>">Edit</a>
                                <a class="delete-button"
                                    href="<?php echo URLROOT ?>/PackageController/delete?code=<?php echo $package->pack_code; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
