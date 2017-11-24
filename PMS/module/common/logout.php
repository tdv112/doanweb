<?php
session_start();
session_destroy();
echo "Đăng xuất thành công, nhấn BACK để quay lại trang đăng nhập";
header("location:../../index.php");
?>