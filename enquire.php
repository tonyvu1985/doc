<div class="leftcoldiv">
		<h3>Enquiry Form</h3>
		<form method="post" action="subscribe.php" onsubmit="return validateForm();">
			<p><input type="text" class="form-control" name="name" placeholder="Your name" id="subscriber_name"></p>
			<p><input type="text" class="form-control" name="phone" placeholder="phone number" id="subscriber_phone"></p>
			<p><input type="text" class="form-control" name="email" placeholder="Your Email" id="subscriber_email"></p>
			<p><textarea name="message" class="form-control"></textarea></p>
			<select class="form-control" name="clinic">
				<option value="default">-- Choose your clinic--</option>
				<option value="Sydney">Sydney</option>
				<option value="Fairfield">Fairfield</option>
			</select>
			<p><button type="submit" class="btnsubmit" value="Submit">Submit</button></p>
		</form>
</div>
