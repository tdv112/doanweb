
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
	<link rel="stylesheet" href="css/module-index.css">
	<!--Css dành cho menu!-->
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Đây là dòng lệnh dùng để dropdown menu-->
    <div class="pie-report" style="float: right;">
        <script src="js/jquery.min.js"></script>
        <?php include('script.php'); ?>        
        <script src="js/jquery.canvasjs.min.js"></script>        
    </div>
</head>
<body>
<div id="container">
	<!--Phần header-->
	<div id="headerphai">
		<div id="headerbar">
			<div id="user" style="margin-left: 128px;"><a href=""><?php echo "Chào "; print_r($_SESSION['username']); ?></a></div>
			<div id="clock">
			<script type="text/javascript" src="js\clock.js"></script>
			</div>
			<div id="loginbar"><a href="module\common\logout.php">Đăng xuất</a></div>
		</div>
		<div id="logo"><img src="img\logo.png"></div>
		<?php
		/*
		<div id="navtab">
			<div class="navlink"><a href="trangchu.php?mod=trangchu">Trang chủ</a></div>
			<div class="navlink"><a href="trangchu.php?mod=duan">Dự án</a></div>
			<div class="navlink"><a href="trangchu.php?mod=bangcongviec">Công việc</a></div>
			<div class="navlink"><a href="trangchu.php?mod=lich">Lịch</a></div>
		</div>
		*/?>
		<div id="tablinks">
			<div id="noffication"><a href="#">Thông báo :   </a> </div>
			<div id="quicksearch"></div>
		</div>
	</div>
	<!--Phần nội dung-->
	<div id="content">
		<div id="maincontent">
			<!--Phần menu-->
				<section>
			        <!-- Left Sidebar -->
			        <aside id="leftsidebar" class="sidebar">
			            <!-- Menu -->
			            <div class="menu">
			                <ul class="list">
			                    <li class="header">Menu</li>
			                    <li>
			                        <a href="trangchu.php?mod=trangchu">
			                            <i ></i>&nbsp;&nbsp;Trang Chủ
			                        </a>
			                    </li>
			                    <li>
			                        <a href="javascript:void(0);" class="menu-toggle">
			                            <i ></i>&nbsp;&nbsp;Dự Án
			                        </a>
			                        <ul class="ml-menu">
			                            <li>
			                                <a href="trangchu.php?mod=duan">Dự Án 1</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=duan">Dự Án 1</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=duan">Dự Án 1</a>
			                            </li>
			                        </ul> 
			                    </li>                   
			                    <li>
			                        <a href="javascript:void(0);" class="menu-toggle">
			                            
			                            <i ></i>&nbsp;&nbsp;Công Việc
			                        </a>
			                        <ul class="ml-menu">
			                            <li>
			                                <a href="trangchu.php?mod=bangcongviec">Công Việc 1</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=bangcongviec">Công Việc 1</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=bangcongviec">Công Việc 1</a>
			                            </li>
			                        </ul>
			                    </li>
			                    <li>
			                        <a href="javascript:void(0);" class="menu-toggle">
			                            
			                            <i ></i>&nbsp;&nbsp;Lịch
			                        </a>
			                        <ul class="ml-menu">
			                            <li>
			                                <a href="trangchu.php?mod=lich">Lịch Cá Nhân</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=lich">Lịch Cá Nhân</a>
			                            </li>
			                            <li>
			                                <a href="trangchu.php?mod=lich">Lịch Cá Nhân</a>
			                            </li>
			                        </ul>
			                    </li>
			                </ul><br><br><br>
			            </div>
			        </aside>
			    </section>
			<!--Phần nội dung-->
			<div class="left">
				<?php include "mod.php"; ?>
			</div>
			<!--Phần hoạt động-->
			<div class="right">
				<table class="table-right">
					<tr>
						<td class="menuduan"><a href="#">Dự án</a></td>
					</tr>
					<tr>
						<td height="100px;"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!--Phần footer-->
	<div id="footer">
		<div id="globalfooter"></div>
	</div>
</div>
</body>
</html>