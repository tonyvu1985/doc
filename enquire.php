<div class="leftcoldiv">
		<h3>Enquiry Form</h3>
		<!-- pass in variable if form is valid or invalid -->
		<form method="post" name="enquire" ng-submit="submitForm(enquire.$valid)" novalidate>
			<p><input type="text" class="form-control" name="name" ng-model="name" ng-minlength="3" ng-maxlength="8" placeholder="Your name"></p>
			<p><input type="number" class="form-control" name="phone" ng-model="phone" required placeholder="phone number" id="subscriber_phone"></p>
			<p><input type="email" class="form-control" name="email" ng-model="email" placeholder="Your Email" id="subscriber_email"></p>
			<p><textarea name="message" class="form-control"></textarea></p>
			<select class="form-control" name="clinic">
				<option value="default">-- Choose your clinic--</option>
				<option value="Sydney">Sydney</option>
				<option value="Fairfield">Fairfield</option>
			</select>
			<p><button type="submit" class="btnsubmit">Submit</button></p>
		</form>
</div>
