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
<title>KCT G4MER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style type="text/css">
.SET {
	font-family: Tahoma, Geneva, sans-serif;
}
.SET {
	font-family: AngsanaUPC;
}
.SET {
	font-size: 24px;
}
.SET .SET {
	font-size: 50px;
	font-family: AngsanaUPC;
	font-weight: bold;
}
nomal {
	font-size: 24px;
}
body {
	background-color: #CCC;
	text-align: center;
}
</style>
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
<table width="1082" height="308" border="1" align="center">
  <tr>
    <th width="300" rowspan="2" bgcolor="#FFFFFF" scope="col"><img src="b4ca5516-caf8-44c6-98aa-52b16dc8198f.png" width="300" height="300" /></th>
    <th width="753" height="230" bgcolor="#FF9999" scope="col"><h1 class="SET"><span class="SET">KCT 4 gamer </span>    </h1>
    <p><span class="SET"><span class="SET"><span style="font-weight: bold; font-family: AngsanaUPC; font-size: 24px;">KCT Shop อุปกรณ์เกมส์แบนด์ดัง คอมแรงคอเกมส์ แต่งคอมสวยด้วยชุดระบายความร้อนด้วยน้ำ รับซ่อมประกอบอัพเกรดคอม</span></span></span></p>
    <p><span class="SET">ปรับปรุงล่าสุดเมื่อ -

        <!-- #BeginDate format:Am1 -->June 24, 2016<!-- #EndDate --> 
    </span></p></th>
  </tr>
  <tr>
    <td height="70" bgcolor="#FFFFFF"><table width="100%" height="66" border="1">
      <tr class="set">
        <th width="19%" height="60" scope="col"><img src="home-logo-md.png" width="20" height="20" /><a href="index.php"> หน้าแรก </a></th>
        <th width="22%" scope="col"><img src="xigKzEg4T.png" width="31" height="27" /> <a href="item.php"> รายการสินค้า</a></th>
        
       <th width="20%" scope="col"><img src="persona-logo.png" width="20" height="20"  />    
        <?php if($_SESSION["status"]=="online") 
                 echo '<a href="ddd.php">เพิ่มรายชื่อพนักงาน</a>'; 
              else echo "รายชื่อพนักงาน";
        ?>
        </th>  
        <th width="20%" scope="col"><img src="man-42934_960_720.png" width="20" height="20"  /> <a href="loginc.php"> <?php if($_SESSION["status"]=="online") echo "ออกจากระบบ"; else echo "เข้าสู่ระบบ";?> </a></th>
      </tr>
    </table></td>
  </tr>
</table>
<?php 
		$command = "SELECT * FROM STOCK";
		$result = mysql_query($command) or die (mysql_error()); 
		
		
?>
<table align="center" class="table table-hover">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>TYPE</th>
		<th>Price</th>
		<th>Quality</th>
		
	</thead>
	
		<?php while($que = mysql_fetch_array($result))
			{
				$S_ID = $que["S_ID"];
		?>
		<tr>
			<form method="POST" action="buy.php">
				<td><?php echo $que["S_ID"]; ?></td>
				<td><?php echo $que["S_NAME"]; ?></td>
				<td><?php echo $que["S_TYPE"]; ?></td>
				<td><?php echo $que["S_PRICE"]; ?></td>
				<td><?php echo $que["S_QOH"]; ?></td>
				<!-- <td><?php if($_SESSION["status"]=="online") echo  "<button type=\"submit\" class=\"btn btn-success\" name=\"S_ID\" value=\"$S_ID\">Add</button>";?></td> -->
			</form>
		</tr>
		<?php
			}
		?>
	
</table>
<?php if($_SESSION['status']=='online')
echo "<form action=\"additem.php\"><button type=\"submit\">Add Item</button></form>"; ?>