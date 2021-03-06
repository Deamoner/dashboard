<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
	<script type="text/javascript" src="Vendors/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="Vendors/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<!-- Additional header sections will go here -->
	<?php echo $headers; ?>

</head>
<body>
	<div class="container">
		<?php echo $content; ?>		
	</div>
</body>
</html>
