var validationApp = angular.module('validationApp', []);
// create angular controller
validationApp.controller('mainController', ['$scope', function($scope) {
$scope.submitted = false; //used so that form errors are shown only after the form has been submitted
$scope.signupForm = function() {
	if ($scope.frmsubscribe.$valid) {
		// Submit as normal
	} else {
		$scope.frmsubscribe.submitted = true;
	}
}
}]);


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
