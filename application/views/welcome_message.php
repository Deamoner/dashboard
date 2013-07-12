<div id="content" ng-app='DashboardHomeApp' ng-controller='HomeCtrl' >
	<h1>Welcome to Dashboard!</h1>

	<div id="body">

		<pre>Please login and continue to the dashboard.</pre>
		<hr>
		<pre> Thank <strong>{{name}}</strong> you for comming back

			<form method="POST" ng-submit="validate()" action="account/check">
				<input type="text" name="username" ng-model="name" placeholder="Username"/>	
				<input type="password" name="password" placeholder="Password">
				<input type="submit" class="btn" value="Login">
			</form>

			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{error}}

			</div>
		</pre>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

<script type="text/javascript">

var DashboardModule = angular.module('DashboardHomeApp', []);

///HOME CONTROLLER FOR HOME PAGE MODULE
DashboardModule.controller('HomeCtrl',function($scope){

	//Validate the form
	$scope.validate = function()
	{
		if($scope.name == undefined || $scope.name == '')
		{
			$scope.error = 'Hey man type in a name atleast.';
			return false;
		}
		$scope.error = '';
		return true;		
	}

	//Scope variables
	$scope.greeting = 'hola';

});


</script>