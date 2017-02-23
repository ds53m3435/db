<?php 
	$hostname ="localhost";
	$username ="cs57160040";
	$password ="Dt8R7ASn2pAEuLVL";
	$db_name="cs57160040";
	$link = mysql_connect($hostname,$username,$password) or die(mysql_error());
	session_start();
if(!$link)
	echo "dont connect : ".mysql_error();
$db_selected = mysql_select_db($db_name, $link);
?>
<form method="POST" action="">
<input type="text" name="name" placeholder="name item" autocomplete="off"><br>
<input type="text" name="type" placeholder="type item" autocomplete="off"><br>
<input type="text" name="com" placeholder="company" autocomplete="off"><br>
<input type="text" name="price" placeholder="price item" autocomplete="off"><br>
<input type="text" name="qoh" placeholder="quanlity" autocomplete="off"><br>
<input type="text" name="cost" placeholder="cost" autocomplete="off"><br>
<button type="submit">add</button>
</form>
<a href="item.php">
<button type="button" >Back</button>
</a>
<?php 
if($_POST['name']!='' and $_POST['type']!='' and $_POST['price']!='' and $_POST['qoh']!=''){
	echo date("Y-m-d");
$sql = "INSERT INTO `STOCK` ( `S_TYPE`, `C_ID`, `S_IMPORTDATE`, `S_PRICE`, `S_QOH`, `S_COSTS`, `S_NAME`)
VALUES ('".$_POST['type']."','".$_POST['com']."','".date('Y-m-d')."','".$_POST['price']."','".$_POST['qoh']."','".$_POST['cost']."','".$_POST['name']."')";
	$query=mysql_query($sql);

	if($query){
			echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว'); window.location='index.php';</script>";
			}
	else {
			echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
							}
			}
 ?>