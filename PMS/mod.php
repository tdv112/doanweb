<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
$path =ROOT."/trangchu.php";//mac dinh
	$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	if($mod=="duan")
	{
		include ROOT."/module/duan/content.php";
	}
	if ($mod=="tailieu")
	{
		include ROOT."/module/tailieu/content.php";
	}
	if ($mod=="canhan")
	{
		include ROOT."/module/canhan/content.php";
	}
	if ($mod=="bangcongviec")
	{
		include ROOT."/module/bangcongviec/bangcongviec.php";
	}

?>