<div class="leftcoldiv">
	<h2>Enquiry Form</h2>
	<form method="post" name="frmsendemail" id="sendemail" action="send-email.php" novalidate ng-submit="sendemailForm()">
	<p><input type="text" placeholder="Name" name="requestor" class="form-control" ng-model="requestor" ng-minlength="3" ng-maxlength="30" required ng-focus /></p>
	<div class="error-container" ng-show="frmsendemail.requestor.$dirty && frmsendemail.requestor.$invalid && !frmsendemail.requestor.$focused">	
		<small ng-show="frmsendemail.requestor.$error.minlength" class="help-block">Name is too short.</small>
		<small ng-show="frmsendemail.requestor.$error.maxlength" class="help-block">Name is too long.</small>
		<small ng-show="frmsendemail.requestor.$error.required" class="help-block">Name is required.</small>
	</div>

	<p><input type="number" placeholder="Phone number" name="phone" class="form-control" ng-model="phone" required ng-focus /></p>
	<div class="error-container" ng-show="frmsendemail.phone.$dirty && frmsendemail.phone.$invalid && !frmsendemail.phone.$focused">	
		<small ng-show="frmsendemail.phone.$error.required" class="help-block">Phone is required.</small>
		<small ng-show="frmsendemail.phone.$error.number" class="help-block">Phone must contain only number.</small>
	</div>

	<p><input type="email" placeholder="Email" name="from" class="form-control" ng-model="from" ng-minlength="3" ng-maxlength="40" required ng-focus /></p>
	<div class="error-container" ng-show="frmsendemail.from.$invalid && frmsendemail.from.$dirty && !frmsendemail.from.$focused">
		<small ng-show="frmsendemail.from.$error.minlength" class="help-block">Email is too short.</small>
		<small ng-show="frmsendemail.from.$error.maxlength" class="help-block">Email is too long.</small>
		<small ng-show="frmsendemail.from.$error.required" class="help-block">Email is required.</small>
		<small ng-show="frmsendemail.from.$error.email" class="help-block">Please input a valid email.</small>
	</div>	
	
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
	<p><button type="submit" name="submit" id="btnsendemail" class="btn btn-default" ng-disabled="frmsendemail.$invalid">Send Request</button></p>
	<p class='sucess-message'>Thank you for sending us feedback</p>
	</form>
</div>

<script type="text/javascript">
        send_request();
</script>

