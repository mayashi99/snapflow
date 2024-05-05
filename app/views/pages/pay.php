<!DOCTYPE html>
<head>
	<title>Payment</title>
	
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style_payment.css">
    
</head>
<body>
	
	<div class="container">
	<form>
	<fieldset>
	<b><lable>We accept credit card or debit card payments only.</lable>
	<br><br>
	<lable>Debit/Credit card</lable></b>
	<br><br>
	<lable>Name on card</lable>
	<input type="text" id="cardholder" name="cardholder" value="Card holder's number" required>
	<br><br>
	<lable>Debit/Credit card number</lable>
	<input type="text" id="cardnumber" name="cardnumber" value="0000 0000 0000 0000" required>
	<br><br>
	<lable>Expiration date</lable>
	<input type="date" id="expdate" name="expdate" required>
	<br><br>
	<lable>Security code</lable>
	<input type="text" id="pin" name="pin" size="3" maxlength="3" required>
	<br><br>
	
	<button onclick="back()">Back</button>
	
	<div class="right">
	<input type="submit" value="Pay">
	</div>
	
	</fieldset>
	</form>
	</div>
	
	<script>
	function back(){
		window.history.back();
	}
	</script>
	
</body>
</html>