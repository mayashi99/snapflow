<!DOCTYPE html>
<head>
	<title>Payment Successful</title>
	
	<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_paysuccessful.css">

</head>
<body>

<div class="topnav">
    <div class="test">
      <img src="<?php echo URLROOT ?>/public/images/logo.png" alt="logo" width="120">
    </div>
    <div>
      <a class="active" href="#home">Home</a>
      <a href="<?php echo URLROOT ?>/PageController/blog">Blog</a>
      <a href="<?php echo URLROOT ?>/PageController/about">About Us</a>
      <a href="<?php echo URLROOT ?>/PageController/packages">Packages</a>
    </div>
    <div class="log">
      <a href="<?php echo URLROOT ?>/PageController/signup">Signup</a>
      <a href="<?php echo URLROOT ?>/PageController/signIn">Login</a>
    </div>
  </div>

	<div class="container2">
		<div class="container">
			<h1>Payment Successful!</h1>
			<p>Your payment has been completed successfully.</p>
			
			<button id="doneButton">Done</button>
		</div>
			<h5>We will provide all photos after you have made the full payment.</h5>
			
			<div class="right">
				<button class="next-button">Next</button>
			</div>
	</div>

</body>
</html>