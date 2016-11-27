<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
if($_POST['name']!='' and $_POST['username']!='' and $_POST['password']!='' and $_POST['mail']!='' and $_POST['tel']!=''){
	include ('connect.php'); //เรียกใช้ไฟล์ connect เพื่อใช้ในการติดต่อฐานข้อมูล

	$sql='SELECT * FROM  `member` WHERE  `user` =  "'.$_POST["username"].'"';
	$query=mysql_query($sql);
	$num=mysql_num_rows($query);
	if($num>=1){
		echo "<script>alert('ชือผู้ใช้งานนี้มีคนใช้งานแล้ว'); window.location='ddd.php';</script>";
		}
	else{
		$sql1="INSERT INTO member values ('','".$_POST['name']."','".$_POST['username']."','".$_POST['password']."','".$_POST['mail']."','".$_POST['tel']."')";
		$query1=mysql_query($sql1);

		  if($query1){
			echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว'); window.location='index.php';</script>";
			}
			else {
				echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ'); window.location='ddd.php';</script>";
				}
		}
	}
else{
	echo "<script>alert('กรุณากรอกข้อมูลให้ครบ'); window.location='ddd.php';</script>";

	}
?>
</body>
</html>
