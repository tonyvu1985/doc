<div class="leftcoldiv">
		<h3>Enquiry Form</h3>
		<!-- pass in variable if form is valid or invalid -->
		<form name="frmenquire" ng-submit="submitForm(frmenquire.$valid)" novalidate>
			<input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="3" ng-maxlength="8">
			<p ng-show="frmenquire.username.$error.minlength" class="help-block">Username is too short.</p>
			<p ng-show="frmenquire.username.$error.maxlength" class="help-block">Username is too long.</p>

			<p><input type="number" class="form-control" name="phone" ng-model="phone" required placeholder="phone number"></p>
			<p ng-show="frmequire.phone.$error.required" class="help-block">Is number</p>			

			<p><input type="email" class="form-control" name="email" ng-model="email" placeholder="Your Email" required></p>
			<p ng-show="frmenquire.email.$invalid && !frmenquire.email.$pristine" class="help-block">Enter a valid email.</p>

			<p><textarea name="message" class="form-control"></textarea></p>
			<select class="form-control" name="clinic">
				<option value="default">-- Choose your clinic--</option>
				<option value="Sydney">Sydney</option>
				<option value="Fairfield">Fairfield</option>
			</select>
  <div class="error" ng-show="signup_form.name.$dirty && signup_form.name.$invalid">
    <small class="error" ng-show="signup_form.name.$error.required">
        Your name is required.
    </small>
    <small class="error" ng-show="signup_form.name.$error.minlength">
            Your name is required to be at least 3 characters
    </small>
    <small class="error" ng-show="signup_form.name.$error.maxlength">
            Your name cannot be longer than 20 characters
    </small>
  </div>-->
			<p><button class="btnsubmit" ng-disable="signup_form.$invalid">Submit</button></p>
		</form>
</div>
