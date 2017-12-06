<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Du an</title>
</head>
<body>
<div style="float: left; width: 700px;">
<?php 
	 try{
    $pdh = new PDO("mysql:host=localhost; dbname=b9_20765567_quanlyduan"  , "root"  , ""  );
     //$pdh = new PDO("mysql:host=sql312.byethost9.com; dbname=b9_20765567_quanlyduan"  , "b9_20765567"  , "everytimewetouch");
    $pdh->query("  set names 'utf8'"  );
  	}
  	catch(Exception $e){
   	 echo $e->getMessage(); exit;
  	}
  	$stm = $pdh->prepare("select * from duan");
	$stm->execute();
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
 ?>
 <table><tr><td>maduan</td><td>tên du an </td>
			<td>manvql</td><td>ngaybatdau</td><td>ngayketthuc</td><td>nguoinghiemthu</td></tr>
	<?php
	foreach($rows as $row)
	{
		?>
	    <tr><td><?php echo $row["maduan"];?></td>
	    	<td><?php echo $row["tenduan"];?></td>
	    	<td><?php echo $row["manvql"];?></td>
	    	<td><?php echo $row["ngaybatdau"];?></td>
	    	<td><?php echo $row["ngayketthuc"];?></td>
	    	<td><?php echo $row["nguoinghiemthu"];?></td>
	        </tr>
	    <?php
	}
	?>
</table>
</div>
</body>
</html>