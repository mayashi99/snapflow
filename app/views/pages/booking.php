<!DOCTYPE html>
<head>
    <title>Booking Page</title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_booking.css">
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


<div class="padding">
	<form style="background-color:#E6E6FA">
	<fieldset>

				<label>Event Type</label>
				<select name="packType" id="packType" required>
					<option selected disabled>Events</option>
					<option value="wedding">Wedding</option>
					<option value="bday">Birthday</option>
					<option value="get">Get Together</option>
					<option value="graduation">Graduation</option>
					<option value="corporate">Corporate Event</option>
					<option value="party">Party</option>
				</select>
				<br><br>

				<label>Package Type</label>
				<select name="packType" id="packType" required>
					<option selected disabled>Packages</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">Get 3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
				<br><br>
				
				<label>Organization Name</label>
				<select name="orgName" id="orgName" required>
					<option selected disabled>Organizations</option>
					<option value="p1">Organi-1</option>
					<option value="p2">Organi-2</option>
					<option value="p3">Organi-3</option>
					<option value="p3">Organi-4</option>
					<option value="p3">Organi-5</option>
				</select>
				<br><br>
				
				<label>Date</label>
				<input type="date" required>
				<br><br>
				
				<label>Venue</label>
				<input type="text" placeholder="Location" required>
				<br><br>
				
				<label>Copy Type</label>
				<br><b>
                <div class="radio-padding" required>
				<input type="radio" id="softcopy" value="softcopy" name="copy"> Soft Copy </div>
				<div class="radio-padding">
                <input type="radio" id="hardcopy" value="hardcopy" name="copy"> Hard Copy </div>
				</b><br><br>

				<div class="right">
				<input type="submit" value="Submit">
				<br><br>
				</div>

	</fieldset>
	</form>	
	</div>

	<div class="padding-2">	
		<form style="background-color:#E6E6FA">
		<fieldset>
			<h2>Manager request form</h2>
		
			<label>Date</label>
				<input type="date" required>
				<br><br>
				
			<label>Venue</label>
				<input type="text" placeholder="Location" required>
				<br><br>
			
			<label>Package Type</label>
				<select name="packType" id="packType" required>
					<option selected disabled>Packages</option>
					<option value="wedding">Wedding</option>
					<option value="bday">Birthday</option>
					<option value="get">Get Together</option>
					<option value="graduation">Graduation</option>
					<option value="corporate">Corporate Event</option>
					<option value="party">Party</option>
				</select>
				<br><br>
		
			<button onclick="back()" class="back-btn">Back</button>
			
			<div class="right">
				<input type="submit" value="Proceed">
				<br><br>
			</div>
	
		</fieldset>
		</form>
	</div>

	<div class="but">
    <button>
    <a href="<?php echo URLROOT ?>/PageController/feedback">Feedback</a>
    </button>
    </div>



</body>
</html>