<div class="leftcoldiv">
		<h3>Enquiry Form</h3>
		<!-- pass in variable if form is valid or invalid -->
		<form name="frmenquire" ng-submit="submitForm(frmenquire.$valid)" novalidate>
			<input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="3" ng-maxlength="8" placeholder="Your full name">
			<p><span ng-show="frmenquire.username.$error.minlength" class="help-block">Name is too short.</span>
			<span ng-show="frmenquire.username.$error.maxlength" class="help-block">Name is too long.</span></p>

			<p><input type="number" class="form-control" name="phone" ng-model="phone" placeholder="Phone number"></p>
			<p ng-show="frmenquire.phone.$invalid && !frmenquire.phone.$pristine" class="help-block">Enter a valid number.</p>

			<p><input type="email" class="form-control" name="email" ng-model="email" placeholder="Your Email" required></p>
			<p ng-show="frmenquire.email.$invalid && !frmenquire.email.$pristine" class="help-block">Enter a valid email.</p>

			<p><textarea name="message" class="form-control"></textarea></p>
			<select class="form-control" name="clinic">
				<option value="default">-- Choose your clinic--</option>
				<option value="Sydney">Sydney</option>
				<option value="Fairfield">Fairfield</option>
			</select>
			<p><button type="submit" class="btnsubmit" ng-disable="frmenquire.$invalid">Submit</button></p>
		</form>
</div>
