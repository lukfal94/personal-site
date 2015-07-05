<!DOCTYPE html>
<html>
	<head>
		<title>Luke Fallon</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <link rel="stylesheet" href="CSS/style.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body>

	<?php
		include_once("navbar.html");
	?>

		<!-- Main Content -->
		<div class="col-md-8 col-md-offset-2" id="wrapper">
			<div class='container-fluid' style="padding-top: 60px">
				<div class='row'>
					<div class='col-md-6'>Contact</div>
					<div class="col-md-6">
						<form class="form-horizontal" role="form" method="post" action="contact.php">
							<div class="form-group">
								<div class="col-sm-10">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript">
    	$(document).ready(function() {
    		$('.nav.navbar-nav li:nth-child(3)').addClass("active");
    	});
    </script>
	</body>
</html>













