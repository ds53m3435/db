<?php 
	if(isset($_POST['ps1']) &&  isset($_POST['ps2']))
	{
		if($_POST['ps2'] == $_POST['ps1'])
	 	echo "G";
	}
?>
	
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<title>Register</title>
</head>
<body>
	<form method="POST" action="ddd.php">
	 	<div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input style="width :220px" type="DBid" class="form-control" name="id" placeholder="Username">
 	 	</div>
		 <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input style="width :220px" type="DBps" class="form-control" name="ps1" placeholder="Password">
  		</div>
  		<div class="form-group">
		    <label for="exampleInputPassword1">Password Repeat</label>
		    <input style="width :220px" type="DBps" class="form-control" name="ps2" placeholder="Password">
  		</div>
  		
  		<button type="submit" class="btn btn-default">Register</button>
	</form>
</body>
</html>