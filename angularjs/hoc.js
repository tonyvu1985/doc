var validationApp = angular.module('validationApp', []);
//alert();
// create angular controller
validationApp.controller('mainController', function($scope, $http) {
	$scope.result = 'hidden'
	$scope.resultMessage;
	$scope.formData; //formData is an object holding the name, email, subject, and message
	$scope.submitButtonDisabled = false;
	$scope.submitted = false; //used so that form errors are shown only after the form has been submitted

	// function to submit the form after all validation has occurred			
	$scope.submitForm = function(isValid) {
		$scope.submitted = true;
		$scope.submitButtonDisabled = true;
		// check to make sure the form is completely valid
		if (isValid) {
		//	alert('our form is amazing');
		$http({
			method  : 'POST',
			url     : 'contact-form.php',
			data    : $.param($scope.formData),  //param method from jQuery
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  //set the headers so angular passing info as form data (not request payload)
			}).success(function(data){
				console.log(data);
				if (data.success) { //success comes from the return json object
				    $scope.submitButtonDisabled = true;
				    $scope.resultMessage = data.message;
				    $scope.result='bg-success';
				} else {
				    $scope.submitButtonDisabled = false;
				    $scope.resultMessage = data.message;
				    $scope.result='bg-danger';
				}
			});

		}else{
			//ialert('not valid');
			$scope.submitButtonDisabled = false;
			$scope.resultMessage = 'Failed <img src="http://www.chaosm.net/blog/wp-includes/images/smilies/icon_sad.gif" alt=":(" class="wp-smiley">  Please fill out all the fields.';
			$scope.result='bg-danger';
		}

	};

});


function insert_subscriber(){
	jQuery("#btnsubscribe").click(function(e){
		e.preventDefault();
		jQuery.ajax({
			type: "POST",
			url: jQuery('#subscribe').attr('action'),
			data: jQuery('#subscribe').serializeArray(),
			beforeSend: function(x) {
				jQuery(".glyphicon-refresh").show();
			},
			success: function(data) {
				jQuery(".glyphicon-refresh").hide();
				jQuery(".txtsuccess").show();
			},
		});

	});

}
