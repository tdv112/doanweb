
<?php
session_start();
define('ROOT', dirname(__FILE__) );//Thu muc chứa file index);
include "include/function.php";
if(!$_SESSION['username'])
	{
		header('Location:index.php');
	};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hệ thống quản lý dự án</title>
	<link rel="stylesheet" type="text/css" href="css\module-index.css">
</head>
<body>
<div id="container">
	<!--Phần header-->
	<div id="header">
		<div id="headerbar">
			<div id="user" style="margin-left: 128px;"><a href=""><?php echo "Chào "; print_r($_SESSION['username']); ?></a></div>
			<div id="clock">
			<script type="text/javascript" src="js\clock.js"></script>
			</div>
			<div id="loginbar"><a href="module\common\logout.php">Đăng xuất</a></div>
		</div>
		<div id="logo"><img src="img\logo.png"></div>
		<div id="navtab">
			<div class="navlink"><a href="trangchu.php?mod=trangchu">Trang chủ</a></div>
			<div class="navlink"><a href="trangchu.php?mod=duan">Dự án</a></div>
			<div class="navlink"><a href="trangchu.php?mod=bangcongviec">Công việc</a></div>
			<div class="navlink"><a href="trangchu.php?mod=lich">Lịch</a></div>
		</div>
		<div id="tablinks">
			<div id="noffication"><a href="#">Thông báo :   </a> </div>
			<div id="quicksearch"></div>
		</div>
	</div>
	<!--Phần nội dung-->
	<div id="content">
		<div id="maincontent">
			<div class="left">
				<?php include "mod.php"; ?>
			</div>
			<div class="right">
				<table class="table-right">
					<tr>
						<td class="menu"><a href="#">Dự án</a></td>
					</tr>
					<tr>
						<td height="200px;"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="globalfooter"></div>
	</div>
</div>
</body>
</html>