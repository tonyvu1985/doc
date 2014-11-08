jQuery(document).ready(function(){
	var pathname = window.location.pathname;
	switch (pathname) {
		case '/': jQuery('.homeMenu').css('background-color','#bd363f');return;
		case '/about.php': jQuery('.aboutMenu').css('background-color','#bd363f');return;
		case '/article.php': jQuery('.aboutMenu').css('background-color','#bd363f');return;
		case '/acupuncture.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/herbs.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/cupping.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/moxibustion.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/tuina.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/fund.php': jQuery('.treatmentMenu').css('background-color','#bd363f');return;
		case '/condition.php': jQuery('.conditionMenu').css('background-color','#bd363f');return;
		case '/nutrition.php': jQuery('.nutritionMenu').css('background-color','#bd363f');return;
		case '/faq.php': jQuery('.faqMenu').css('background-color','#bd363f');return;
		case '/contact.php': jQuery('.contactMenu').css('background-color','#bd363f');return;
	}
});

var validationApp = angular.module('validationApp', []);
// create angular controller
validationApp.controller('mainController', ['$scope', function($scope) {
$scope.submitted = false; //used so that form errors are shown only after the form has been submitted
/*$scope.signupForm = function() {
	if ($scope.frmsubscribe.$valid) {
		// Submit as normal
	} else {
		$scope.frmsubscribe.submitted = true;
	}
}*/
}]);

// show the message after blur
validationApp.directive('ngFocus', [function(){
	var FOCUS_CLASS = 'ng-focused';
	return{
		restrict: 'A',
		require: 'ngModel',
		link: function(scope, element, attrs, ctrl){
			ctrl.$focused = false;
			element.bind('focus', function(evt){
				element.addClass(FOCUS_CLASS);
				scope.$apply(function(){ctrl.$focused = true;});
			}).bind('blur', function(evt){
				element.removeClass(FOCUS_CLASS);
				scope.$apply(function(){ctrl.$focused = false;});
			});
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

function send_request(){
	jQuery("#btnsendemail").click(function(e){
		e.preventDefault();
		jQuery.ajax({
			type: "POST",
			url: jQuery('#sendemail').attr('action'),
			data: jQuery('#sendemail').serializeArray(),
			beforeSend: function(x) {
				jQuery(".glyphicon-refresh").show();
			},
			success: function(data) {
				jQuery(".glyphicon-refresh").hide();
				jQuery(".sucess-message").show();
			},
		});

	});

}
