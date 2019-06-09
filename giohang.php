<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanh Toán</title>
</head>
<body>
<?php
$ID=$_GET['masp'];
?>
<?php 
	include('Connect.php');
?>
	
    <form method="post" enctype="multipart/form-data">
    <table id="add-prd" border="1" cellpadding="0" cellspacing="0" bgcolor="#FAB8EE">
   
    	<tr><td>Mã sản phẩm</td>
        <td>Tên sản phẩm</td>
        <td>Đơn giá</td>
        <td>Ảnh sản phẩm</td>
        <td>Số lượng</td></tr>
<?php
$sql="select * from sanpham where Code='$ID'";
$thucthi=mysqli_query($con,$sql);
$row=mysqli_fetch_array($thucthi);
$masp=$row[0];
$tensp=$row[1];
$dongia=$row[2];
$anh=$row[4];
?>       
        <tr>
		<td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><img src="anh/<?php echo $row['image'];?>" width="100px" height="100px"/></td>
        <td><input type="textbox" name="txtsl" value='
        <?php
			if(isset($_POST['ok']))
			{ echo $_POST['txtsl']; }
			else { echo "1"; }
		
	?> '/> <br>
    <?php
	echo "có tối đa".$row['quantity']."sản phẩm"; 
	?><br /><input type="submit" name="ok" value="Cập nhật"/></td></tr>
    <tr><td align="center" colspan="5">
    <input type="submit" name="mua" value="Mua hàng" /></td></tr>
   </table></form>
   <?php
   			if(isset($_POST['ok']))
			{ echo "Tổng tiền phải trả là:".$tong=$row['price']*$_POST['txtsl'];    }
			else 
			{ echo "Tổng tiền phải trả là:".$tong=$row['price']*1; }
			     
	?>	
    
    <?php  
		if(isset($_POST['mua']))
		{
			$sl=$_POST['txtsl'];
			$slcon=$row['quantity']-$_POST['txtsl'];
			$sql2="update sanpham set quantity=$slcon where Code='$id'";
			$thucthi2=mysqli_query($con,$sql2);
			$sql3="insert into hoadon(Masp,tensp,dongia,anh,soluong,thanhtien) values('$masp','$dongia','$anh','$slcon','$tong')";
			$thucthi3=mysqli_query($con,$sql2);
			if($thucthi3) header('location:thanhtoans.php');	
		}
	?>
</body>
</html>