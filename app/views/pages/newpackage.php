<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Package</title>
   
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding-top: 50px; /* Adjust as needed */
            box-sizing: border-box;
            background-color: #f0f0f0; /* Background color for demo */
        }
        form {
            width: 300px; /* Set the width of the form */
            margin: 0 auto; /* Center the form horizontally */
            background-color: #fff; /* Form background color */
            padding: 20px; /* Form padding */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Form shadow */
        }
        table {
            width: 100%;
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
    </style>
</head>

<body>



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