<div class="featured">
	<section class="widget">
		<h4>Treatments</h4>
		<ul class="treatments">
			<li><a href="">Diet & Lifestyle</a></li>
			<li><a href="cupping.php">Cupping</a></li>
			<li><a href="moxibustion.php">Moxibustion</a></li>
			<li><a href="tuina.php">Tuina</a></li>
			<li><a href="">Health Funds</a></li>
			<li><a href="article.php">Media Articles</a></li>
		</ul>
	</section>

	<!-- Subscribe letter -->
	<div class="subscribe">
		<h4>Subscribe Newsletter</h4>
		<form id="subscribe" name="frmsubscribe" method="post" action="insert.php" novalidate ng-submit="signupForm()">
			<p><input type="text" name="name" class="form-control" placeholder="Your name" ng-model="name" ng-minlength="3" ng-maxlength="30" required ng-focus /></p>

			<div class="error-container" ng-show="frmsubscribe.name.$dirty && frmsubscribe.name.$invalid && !frmsubscribe.name.$focused">
				<small ng-show="frmsubscribe.name.$error.minlength" class="help-block">Name is too short.</small>
				<small ng-show="frmsubscribe.name.$error.maxlength" class="help-block">Name is too long.</small>
				<small ng-show="frmsubscribe.name.$error.required" class="help-block">Name is required.</small>
			</div>

			<p><input type="email" name="email" class="form-control" placeholder="Email" ng-model="email" ng-minlength="3" ng-maxlength="40" required ng-focus/></p>
			<div class="error-container" ng-show="frmsubscribe.email.$invalid && frmsubscribe.email.$dirty && !frmsubscribe.email.$focused">
				<small ng-show="frmsubscribe.email.$error.minlength" class="help-block">Email is too short.</small>
				<small ng-show="frmsubscribe.email.$error.maxlength" class="help-block">Email is too long.</small>
				<small ng-show="frmsubscribe.email.$error.required" class="help-block">Email is required.</small>
				<small ng-show="frmsubscribe.email.$error.email" class="help-block">Please input a valid email.</small>
			</div>

			<p><button type="submit" id="btnsubscribe" class="btn btn-default" ng-disabled="frmsubscribe.$invalid">Subscribe Newsletter</button></p>	
			<p class="glyphicon glyphicon-refresh spin"></p>
			<p class="txtsuccess">Thank you for subscribe</p>	
		</form>
	</div>
</div>

<script type="text/javascript">
	insert_subscriber();
</script>
