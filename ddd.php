<html>
<head>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="shortcut icon" href="male.ico">
	<title>Register</title>
</head>
<body>
	<form method="POST" action="insert_register.php">
		<div class="container">
			<div style="width:600px; margin:0px auto;">
				<div class="col-md-12 col-md-offset-2">
					<br><img src="team-avatar.png" class="img-circle" width="270" height="220">
				</div>
				
				<form method="POST" action="ddd.php">
			 		<div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputEmail1">Surname</label>
					    <input   class="form-control" name="name" placeholder="Surname"><br>
			 	 	</div>
					 <div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Username</label>
					    <input   class="form-control" name="username" placeholder="Username"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Password</label>
					    <input  type="password" class="form-control" name="password" placeholder="Password"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Email</label>
					    <input  class="form-control" name="mail" placeholder="Email"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Tel</label>
					    <input   class="form-control" name="tel" placeholder="Tel"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-2">
			  			<button type="submit" class="btn btn-success">Register</button>
			  		</div>
			  		
				</form>
			</div>
		</div>
	</form>
</body>
</html>