<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<head><?php session_start(); ?></head>
<body>
<?

	if($_POST["username"]!= '' and $_POST['password'] !=''){
	
	 include ('connect.php');
	 $sql='SELECT * FROM  `member` WHERE  `user` =  "'.$_POST["username"].'"';
	 $query=mysql_query($sql);
	 $num=mysql_num_rows($query);
	 if($num==1){
		 $sql1='SELECT * FROM  `member` WHERE  `user` =  "'.$_POST["username"].'" and pass ="'.$_POST["password"].'"';
		 $query1=mysql_query($sql1);
		 $num1=mysql_num_rows($query1);
		   if($num1==1){
		   	$_SESSION["status"] = "online";
			   echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบ'); window.location='item.php';</script>";
			   }
		  else {
			  echo "<script>alert('รหัสผ่านไม่ถูกต้อง'); window.location='loginc.php';</script>";
			  }   
		 }
	else {
		echo "<script>alert('ชื่อผู้ใช้งานไม่ถูกต้อง'); window.location='loginc.php';</script>";
		}	 
	}
else{
	echo "<script>alert('กรุณากรอกข้อมูลให้ครบ'); window.location='loginc.php';</script>";
	}	

?>
</body>
</html>
