<html>
<head>

	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 	
		$hostname ="localhost";
		$username ="cs57160040";
		$password ="Dt8R7ASn2pAEuLVL";
		$db_name="cs57160040";
		$link = mysql_connect($hostname,$username,$password) or die(mysql_error());
	 ?>
	<form method="POST" action="List.php">
		<input type="String" name="id" placeholder="username">
		<input type="String" name="ps" placeholder="password">
		<input type="Submit" value="เข้าสู่ระบบ">
	</form>
</body>
</html>