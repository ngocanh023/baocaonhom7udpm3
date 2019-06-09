<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa</title>
</head
><body>
<?php
	$layid=$_GET['id'];
	include('connect.php');
	$sql="delete from sanpham where Code=$layid";
	$thucthu=mysqli_query($con,$sql);
	if ($thucthu) header('location:quantri.php?page_layout=danhsachsp.php');
	else echo "NONO";
 ?>
</body>
</html>