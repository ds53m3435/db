<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" href="login-cus.ico">
	<title>Login สำรับลูกค้า</title>
	<?php session_start();
	if($_SESSION["status"]=="online"){
		session_destroy();
		header("location:index.php");
	}
		?>
</head>
<body>
	<form method="POST" action="insert_login.php">
		<div class="container">
			<div style="width:600px; margin:0px auto;">
				<div class="col-md-12 col-md-offset-2">
					<br><img src="login.png" class="img-circle" width="270" height="220">
				</div>
					 <div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Username</label>
					    <input   class="form-control" name="username" placeholder="Username"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-2">
					    <label for="exampleInputPassword1">Password</label>
					    <input  type="password" class="form-control" name="password" placeholder="Password"><br>
			  		</div>
			  		<div class="col-md-6 col-md-offset-6">
			  			<button type="submit" class="btn btn-info">Log in</button>
			  		</div>
			</div>
		</div>
	</form>
	?>
</body>
</html>