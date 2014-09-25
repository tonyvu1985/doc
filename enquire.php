<div class="leftcoldiv">
	<h2>Enquiry Form</h2>
	<?php
	// display form if user has not clicked submit
	if (!isset($_POST["submit"])) {
	?>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<p><input type="text" placeholder="Name" name="name" class="form-control"></p>
		<p><input type="text" placeholder="Phone number" name="phone" class="form-control"></p>
		<p><input type="text" placeholder="Email" name="from" class="form-control"></p>
		<p><input type="text" name="subject" placeholder="Subject" class="form-control"></p>
		<p><textarea placeholder="Message" name="message" class="form-control"></textarea></p>
		<div class="venue">
			<div>
				<input type="radio" name="place" value="Sydney" checked> Sydney 
			</div>
			<div>
				<input type="radio" name="place" value="Fairfield"> Fairfield
			</div>
		</div>
		<button type="submit" name="submit" class="btn btn-default">Send Request</button>
		</form>
	<?php 
	} else {    // the user has submitted the form
		// Check if the "from" input field is filled out
		if (isset($_POST["from"])) {
		$from = $_POST["from"]; // sender
		$subject = $_POST["subject"];
		$message = 'Message: ' . $_POST["message"]. PHP_EOL . 'Customer Name: ' . $_POST["name"] . PHP_EOL . 'Phone number: ' . $_POST["phone"] . PHP_EOL . 'Place: ' . $_POST["place"];
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// send mail
		mail("tony.vu@mytraining.net",$subject,$message,"From: $from\n");
		echo "<p class='sucess-message'>Thank you for sending us feedback</p>";
	}
	}
	?>
</div>
