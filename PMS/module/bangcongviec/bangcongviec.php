<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/bangcongviec.css">
</head>
<body>
	<?php 
	 try{
    //$pdh = new PDO("mysql:host=localhost; dbname=quanlyduan"  , "root"  , ""  );
      $pdh = new PDO("mysql:host=sql312.byethost9.com; dbname=b9_20765567_quanlyduan"  , "b9_20765567"  , "everytimewetouch");
    $pdh->query("  set names 'utf8'"  );
  	}
  	catch(Exception $e){
   	 echo $e->getMessage(); exit;
  	}
  	$stm = $pdh->prepare('select * from congviec where matrangthai = "1" ');
	$stm->execute();
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

	$stm1 = $pdh->prepare('select * from congviec where matrangthai = "2" ');
	$stm1->execute();
	$rows1 = $stm->fetchAll(PDO::FETCH_ASSOC);

	$stm2 = $pdh->prepare('select * from congviec where matrangthai = "3" ');
	$stm2->execute();
	$rows2 = $stm->fetchAll(PDO::FETCH_ASSOC);
	 ?>
	<table id="bangcv" border="1px" width="925px">
		<tr >
			<td>Công việc mới</td>
			<td>Đang thực hiện</td>
			<td>Hoàn thành</td>
		</tr>
		<tr>

			<td><?php
				foreach($rows as $row)
				 echo $row['tencongviec'].'<br>'; ?></td>

			<td><?php 
				foreach($rows1 as $row1)
				echo $row1['tencongviec']; ?></td>

			<td><?php 
			foreach($rows2 as $row2)
			echo $row2['tencongviec']; ?></td>

		</tr>
		<tr></tr>
	</table>
</body>
</html>