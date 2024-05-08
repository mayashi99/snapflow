<!DOCTYPE html>

<head>
	<title>Payment 1</title>

	<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_payment.css">
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

<br>
<div class="padding">
		<form style="background-color: #ddf1f7">
			<fieldset>

				<h1>We accept credit card or debit card payments only.</h1>

				<h2>Debit/Credit card</h2>

				<label>Name on card:</label><br>
				<div class="input-padding">
					<input type="text" id="cardholder" name="cardholder" placeholder="Card holder's name" required>
				</div>
				<br><br>

				<label>Debit/Credit card number:</label><br>
				<div class="input-padding">
					<input type="text" id="cardnumber" name="cardnumber" placeholder="0000 0000 0000 0000" required>
				</div>
				<br><br>

				<label>Expiration month:</label><br>
				<div class="input-padding">
					<select name="mm" id="mm" required>
						<option value="month" selected disabled>MM</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					</select>
				</div>

				<label>Expiration year:</label><br>
				<div class="input-padding">
					<select name="yy" id="yy" required>
						<option value="year" selected disabled>YY</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
					</select>
				</div>
				<br><br>

				<label>Security code:</label><br>
				<div class="input-padding">
					<input type="text" id="pin" name="pin" placeholder="cvc" size="3" maxlength="3" required>
				</div>
				<br><br>

				<button onclick="back()" class="back-btn">Back</button>

				<div class="right">
					<input type="submit" value="Pay">
				</div>

			</fieldset>
		</form>
	</div>

	<script>
		function back() {
			window.history.back();
		}
	</script>

</body>

</html>