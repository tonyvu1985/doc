<div class="leftcoldiv">
	<h2>Feedback Form</h2>
	<?php
	// display form if user has not clicked submit
	if (!isset($_POST["submit"])) {
	?>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<p><input type="text" placeholder="Email" name="from" class="form-control"></p>
		<p><input type="text" name="subject" placeholder="Subject" class="form-control"></p>
		<p><textarea placeholder="Message" name="message" class="form-control"></textarea></p>
		<p><input type="radio" name="place" value="Sydney" checked>Sydney 
		<input type="radio" name="place" value="Fairfield">Fairfield</p>
		<button type="submit" name="submit" class="btn btn-danger">Send</button>
		</form>
	<?php 
	} else {    // the user has submitted the form
		// Check if the "from" input field is filled out
		if (isset($_POST["from"])) {
		$from = $_POST["from"]; // sender
		$subject = $_POST["subject"];
		$message = $_POST["message"] . "<br/>Place: " . $POST_["place"];
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// send mail
		mail("tony.vu@mytraining.net",$subject,$message,"From: $from\n");
		echo "Thank you for sending us feedback";
	}
	}
	?>
</div>
