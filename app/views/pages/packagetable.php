<?php
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
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center; /* Center align the text inside the body */
        }
        h1 {
            margin-top: 50px; /* Adjust as needed */
        }
        table {
            width: 80%; /* Set the width of the table */
            margin: 0 auto; /* Center the table horizontally */
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .update-button, .delete-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 5px; /* Rounded corners */
        }
        .delete-button {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

<div class="topnav">
        <div class="test">
            <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
        </div>

        <div>
            <a href="<?php echo URLROOT ?>/PageController/homepage">Home</a>
            <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
            <a href="<?php echo URLROOT ?>/PageController/about us">About Us</a>
            <a class="active" href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
        </div>

        <div class="log">
            <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
            <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
        </div>
    </div>

<h1>Our Packages</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Soft Copy Price</th>
                <th>Hard Copy Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($packages as $package) : ?>
                <tr>
                    <td><?php echo $package->pack_name; ?></td>
                    <td>as</td>
                    <td><?php echo $package->soft_copy_price; ?></td>
                    <td><?php echo $package->hard_copy_price; ?></td>
                    <td>
                        <a class="update-button" href="<?php echo URLROOT ?>/PageController/editpackage?code=<?php echo $package->pack_code; ?>">Edit</a>
                        <a class="delete-button" href="<?php echo URLROOT ?>/PackageController/delete?code=<?php echo $package->pack_code; ?>">Delete</a>
                        <!-- <form method="post" action="<?php echo URLROOT; ?>/PackageController/delete">
                            <input type="hidden" name="id" value="<?php echo $row->pack_code; ?>">
                            <button class="delete-button" name="deletepack" value="deletepack" type="submit">Delete</button>
                        </form> -->
                        <!-- <button class="update-button" onclick="updatePackage(<?php echo $package->id; ?>)">Update</button>
                        <button class="delete-button" onclick="deletePackage(<?php echo $package->id; ?>)">Delete</button> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- <script>
        function updatePackage(id) {
            // Add logic to update package with the given id
            console.log('Update package with id:', id);
        }

        function deletePackage(id) {
            // Add logic to delete package with the given id
            console.log('Delete package with id:', id);
        }
    </script> -->

</body>

</html>