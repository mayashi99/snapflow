<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_feedback.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <!-- External JavaScript -->
    <script src="<?php echo URLROOT ?>/public/js/feedbackSort.js" defer></script>
</head>

<body>

    <div class="topnav">
        <div class="test">
            <img src="<?php echo URLROOT ?>/public/images/logo new.png" alt="logo" width="100">
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

    <section id="testimonials">
        <!-- Heading -->
        <div class="testimonial-heading">
            <span>Feedback</span>
            <h1>IMAGOO PHOTOGRAPHY</h1>
        </div>

        <!-- Sorting Dropdown -->
        <div class="sorting-dropdown">
            <label for="sort">Sort by:</label>
            <select id="sort" onchange="sortTestimonials()">
                <option value="date">Date</option>
                <option value="rating">Rating</option>
            </select>
        </div>

        <!-- 1 -->
        <div class="testimonial-box-container">
            <div class="testimonial-box" data-date="2024-04-22" data-rating="4">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Alice Eve</strong>
                            <span>@alice_eve</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography captured our family reunion beautifully! The photos are a perfect blend of
                        candid moments and posed shots, reflecting the joy of our gathering.</p>
                </div>
            </div>

            <!-- 2 -->
            <div class="testimonial-box" data-date="2024-04-19" data-rating="3">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Bob Sgaet</strong>
                            <span>@bob_saget</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>We had a great experience with Imagoo Photography during our outdoor shoot! While some shots
                        didn't meet our expectations, overall, we're satisfied with the outcome.</p>
                </div>
            </div>

            <!-- 3 -->
            <div class="testimonial-box" data-date="2024-04-18" data-rating="5">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Eva Green</strong>
                            <span>@eva_naturelover</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography has a keen eye for capturing the beauty of nature! Our outdoor session
                        resulted in stunning photos that perfectly reflect the serenity of the landscape.</p>
                </div>
            </div>

            <!-- 4 -->
            <div class="testimonial-box" data-date="2024-04-17" data-rating="4">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Lisa Collin</strong>
                            <span>@lisa_col</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>We hired Imagoo Photography for our vacation photoshoot, and we're thrilled with the results!
                        They captured the essence of our trip beautifully, creating lasting memories for us.</p>
                </div>
            </div>

            <!-- 5 -->
            <div class="testimonial-box" data-date="2024-04-16" data-rating="5">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Michael Jordan</strong>
                            <span>@michael_J</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography exceeded our expectations with their professionalism and creativity! The
                        photos from our outdoor adventure are simply breathtaking.</p>
                </div>
            </div>

            <!-- 6 -->
            <div class="testimonial-box" data-date="2024-04-15" data-rating="4">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Sarah Chapman</strong>
                            <span>@sarah_chapman</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography captured the thrill of our adventure perfectly! Their attention to detail and
                        creativity resulted in stunning photos that we'll cherish forever.</p>
                </div>
            </div>

            <!-- 7 -->
            <div class="testimonial-box" data-date="2024-04-14" data-rating="3">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>David Warner</strong>
                            <span>@dav_warner</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Our experience with Imagoo Photography was mixed. While some photos turned out great, others
                        lacked the desired quality. Overall, it was an average experience.</p>
                </div>
            </div>

            <!-- 8 -->
            <div class="testimonial-box" data-date="2024-04-13" data-rating="5">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>Emily Cooper</strong>
                            <span>@emily_cooper</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography truly understands the beauty of nature! Our photoshoot experience was
                        delightful, and the resulting images exceeded our expectations.</p>
                </div>
            </div>

            <!-- 9 -->
            <div class="testimonial-box" data-date="2024-04-12" data-rating="4">
                <div class="box-top">
                    <div class="profile">
                        <div class="profile-img">
                            <img src="<?php echo URLROOT ?>/public/images/user.jpg" alt="Profile Image">
                        </div>
                        <div class="name-user">
                            <strong>John Wick</strong>
                            <span>@john_23</span>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!-- Feedback -->
                <div class="client-comment">
                    <p>Imagoo Photography perfectly captured the excitement of our adventure! The photos are vibrant and
                        lively, bringing back memories of our thrilling experience.</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>