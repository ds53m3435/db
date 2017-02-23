<!DOCTYPE html PUBLIC >
<?
if($_POST['name']!='' and $_POST['username']!='' and $_POST['password']!='' and $_POST['mail']!='' and $_POST['tel']!=''){
	include ('connect.php');
	$v1 = $_POST['name'];
	$v2 =$_POST['username'];
	$v3 = $_POST['password'];
	$v4 = $_POST['mail'];
	$v5 = $_POST['tel'];
	$sql='SELECT * FROM  `member` WHERE  `user` =  "'.$_POST["username"].'"';
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num>=1){
		echo 'ชือผู้ใช้งานนี้มีคนใช้งานแล้ว'.'</br>';
		echo '<a href="from_register.php">กลับไปหน้าสมัครสมาชิก</a>';
		}
	else{
		echo 'saving';
		$query ="INSERT INTO member values ('','$v1','$v2','$v3','$v4','$v5')";
			if(mysql_query($query,$link)){
			echo 'บันทึกข้อมูลเรียบร้อยแล้ว'.'</br>';
			echo '<a href="from_login.php">ไปหน้าlogin</a>';
			}
			else {
				echo 'บันทึกข้อมูลไม่สำเร็จ'.'</br>';
		        echo '<a href="from_register.php">กลับไปหน้าสมัครสมาชิก</a>';
				}
		}	
	}
else if($_POST['name']!='' or $_POST['username']!='' or $_POST['password']!='' or $_POST['mail']!='' or $_POST['tel']!=''){
	echo 'กรุณากรอกข้อมูลให้ครบ'.'</br>';
	echo '<a href="from_register.php">กลับไปหน้าสมัครสมาชิก</a>';
	}	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="from_register.php">
สมัครสมาชิก</br>
ชื่อ-นามสกุล <input name="name"/></br>
username <input name="username" /></br>
password <input name="password" type="password"/></br>
e-mail <input name="mail" /></br>
เบอร์โทร <input name="tel" /></br>
<input name="submit" type="submit" value="สมัครสมาชิก"  />
</form>
</body>
</html>