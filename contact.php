<?php
	
	// Check if the form has been submitted
	if(isset($_POST['submit'])) {
		// Data variables
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subj = $_POST['subj'] ? $_POST['subj'] : "Contact Us : from ".$name;
		$message = $_POST['message'];

		// Email Variables
		$from = $email;
		$to = "lukef94@gmail.com";
		$subject = $subj;
		$body = "From: $name\n E-Mail: $email\n Phone: $phone\n Re: $subj\n Message: $message";

		// Form Validation
		if(!$_POST['name']) {
			$errName = '<p class="text-danger">Please enter your name</p>';
		}

		if(!$_POST['message']) {
			$errMessage = '<p class="text-danger">Please enter a message</p>';
		}
		if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = '<p class="text-danger">Please enter a valid email</p>';
		}	
	}
?>

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
								<div class="col-sm-12">
									<input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>" placeholder="Name">
									<?php echo $errName; ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" placeholder="Email">
									<?php echo $errEmail; ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="phone" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>" placeholder="Phone Number">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" id="subj" name="subj" value="<?php echo htmlspecialchars($_POST['subj']); ?>" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="form-control" rows="4" name="Message" value="<?php echo htmlspecialchars($_POST['message']); ?>" placeholder="Message"></textarea>
									<?php echo $errMessage; ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<!-- To display confirmation alert -->
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













