<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_packages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="<?php echo URLROOT ?>/public/js/packages.js" defer></script>
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

    <div class="container">

        <h3 class="title"> What are you looking for? </h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="<?php echo URLROOT ?>/public/images/wedding_photo.jpg" alt="Wedding">
                <h3>Weddings</h3>
            </div>

            <div class="product" data-name="p-2">
                <img src="<?php echo URLROOT ?>/public/images/birthday_photo.jpg" alt="Birthday">
                <h3>Birthday</h3>
            </div>

            <div class="product" data-name="p-3">
                <img src="<?php echo URLROOT ?>/public/images/get_together_photo.jpg" alt="Get Together">
                <h3>Get Together</h3>
            </div>

            <div class="product" data-name="p-4">
                <img src="<?php echo URLROOT ?>/public/images/graduation_photo.jpg" alt="Graduation">
                <h3>Graduation</h3>
            </div>

            <div class="product" data-name="p-5">
                <img src="<?php echo URLROOT ?>/public/images/corporate_event_photo.jpg" alt="Corporate Event">
                <h3>Corporate Event</h3>
            </div>

            <div class="product" data-name="p-6">
                <img src="<?php echo URLROOT ?>/public/images/party_photo.jpg" alt="Party">
                <h3>Party</h3>
            </div>

        </div>

    </div>

    <div class="products-preview">

        <!--Wedding-->
        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/wedding_photo.jpg" alt="Wedding">
            <h3>Wedding</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

        <!--Birthday-->
        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/birthday_photo.jpg" alt="Birthday">
            <h3>Birthday</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

        <!-- get-->
        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/get_together_photo.jpg" alt="Get Together">
            <h3>Get Together</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

        <!-- Graduation-->
        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/graduation_photo.jpg" alt="Graduation">
            <h3>Graduation</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

        <!--Corporate Event-->
        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/corporate_event_photo.jpg" alt="Corporate Event">
            <h3>Corporate Event</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

        <!--Party-->
        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="<?php echo URLROOT ?>/public/images/party_photo.jpg" alt="Party">
            <h3>Party</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>
                Time Duration: 6 <br>
                Photo Limit: unlimited <br>
                Available Photographers: IMAGOO</p>
            <div class="price">With hard copy: Rs.75000 <br>Without hard copy: Rs.40000 <br></div>
            <div class="buttons">

                <a href="#" class="cart">Book Now</a>
            </div>
        </div>

    </div>




</body>

</html>