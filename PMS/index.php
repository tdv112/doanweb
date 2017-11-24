
  <?php session_start() ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Project Management System</title>
  	<link rel="stylesheet" type="text/css" href="css\index.css">
  </head>
  <body>
    <?php
    function postIndex($index, $value="")
    {
    if (!isset($_POST[$index])) return $value;
    return trim($_POST[$index]);
    }
    if(isset($_POST['submit'])){
    $username = postIndex('username');
    $password = postIndex('password');
    try{
    //$pdh = new PDO("mysql:host=localhost; dbname=quanlyduan"  , "root"  , ""  );
    $pdh = new PDO("mysql:host=sql312.byethost9.com; dbname=b9_20765567_quanlyduan"  , "b9_20765567"  , "everytimewetouch"  );
    $pdh->query("  set names 'utf8'"  );
  }
  catch(Exception $e){
    echo $e->getMessage(); exit;
  }
    if ($username!="")
      {
   $stm = $pdh->query("SELECT * from user where username ='$username' and password = '$password'");
          if($stm->rowCount()==0){
              echo "<script>";
              echo "alert('Tài khoản hoặc mật khẩu chưa chính xác !');";
              echo "</script>";
            }
          else{
            $_SESSION['username'] = $username;
            header('Location:trangchu.php');
          }
    }
  }
    ?>
  <div id="content">
  	<div id="logo">
  		<img src="img\logo.png">
  	</div>
  	<div><hr></div>
  	<div id="login">
  	<form action="index.php" method="post" enctype="multipart/form-data" id='frm1'>
  		Đăng nhập
  		<table id="tblogin" width="300">
  			<tr>
  				<td height="50">Tài khoản *</td>
  				<td><input type="text" name="username"></td>
  			</tr>
  			<tr>
  				<td>Mật khẩu *</td>
  				<td><input type="password" name="password"></td>
  			</tr>
  			<tr>
  				<td height="50"></td>
  				<td>
  					<input type="submit" name="submit" value="Đăng nhập"> <a href="#">Tìm lại tài khoản</a>
  				</td>
  			</tr>
  		</table>
  	</form>
  	</div>
  	<div><hr></div>
  	<div id="info">
  		<div id="contact">
  			<div>Trường Đại học Công Nghệ Sài Gòn</div>
  			<div>Khoa Công nghệ Thông tin</div>
        <div>Username : admin</div>
        <div>Password : admin</div>
  		</div>
  		<div id="pms">
  			<div>Hệ thống quản lý dự án</div>
  			<div>Phiên bản 1.0.0</div>
  		</div>
  	</div>
  </div>
  </body>
  </html>