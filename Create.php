<!DOCTYPE html>
<html>
<head>
	<style>

body {
  background-image: url('Reg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	
	<title>New Account</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/369f406d1c.js" crossorigin="anonymous"></script>
	
	

</head>

<body class="container" >
	<form action="registration.php" method="post">
		<div class="container-fluid">
			<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
					<div class="panel panel-primary" style="margin: 100px">
							<div class="panel-heading text-center">
								<h1>Registration</h1>
							</div>
					<div>					
							<div class="row">
								<div class="col-md-12">
									<div class="panel-heading text-center">
										<p>Enter your details to Register</p>
									</div>
								</div>
							</div>
					</div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="input-group input-group-1g" >
											<span class="input-group-addon">
											<i class="glyphicon glyphicon-user"></i>
											</span> <input class="form-control"  name ="user" type="text" placeholder="username">
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="input-group input-group-1g">
											<span class="input-group-addon">
											<i class="glyphicon glyphicon-eye-open"></i>
											</span> <input class="form-control" name="pass"  type="text" placeholder="password">
									</div>
								</div>
							</div>
							<br>

							<div class="row">
											<div class="col-md-1"></div>
												<div class="col-md-12 text-center">
														<button class="btn btn success">Register</button>
												</div>

							</div>
							<div class="row">
											<div class="col-md-1"></div>
												<div class="col-md-12 text-center">
												<a href="inter.php">Home</a>/<a href="login.php">login</a>
												</div>
												
							</div>
							<br>
					</div>
				</div>
			</div>
		</div>
		<form>
	</body>

</html>