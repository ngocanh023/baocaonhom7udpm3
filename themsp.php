
<?php 
	include('Connect.php');
?>
<h2>Thêm mới sản phẩm</h2>
<div id="main">

    <form method="post" enctype="multipart/form-data">
    <table id="add-prd" border="1" cellpadding="0" cellspacing="0" bgcolor="#FAB8EE">
        <tr>
            <td>Mã sản phảm<br /><input type="text" name="masp" /></td>
        </tr>
        <tr>
            <td>Tên sản phẩm<br /><input type="text" name="tensp" /></td>
        </tr>
        <tr>
            <td>Giá sản phẩm<br /><input type="text" name="giasp" /> VNĐ</td>
          <tr>
            <td>Hãng sản phẩm<br /><input type="text" name="hsp" /></td>
        </tr>
           
        <tr>
            <td>Ảnh sản phẩm<br /><input type="file" name="anh" /></td>
        </tr>
      
        <tr>
            <td>Số lượng<br /><input type="text" name="sl" /></td>
        </tr>
        
        	<td><input type="submit" value="Đồng ý" name="OK" /></td>
        </tr>
    </table>
    </form>
     <?php
	
	if(isset($_POST['OK']))
	{
		$masp=$_POST['masp'];
		$tensanpham=$_POST['tensp'];
		$a=$_FILES['anh']['tmp_name'];
		$gia=$_POST['giasp'];
		$hangsp=$_POST['hsp'];
		$b="anh/".$_FILES['anh']['name'];
		$anh=$_FILES['anh']['name'];
		$up=move_uploaded_file($a,$b);
		$soluong=$_POST['sl'];
	
$sql="insert into sanpham(Code,Name,Price,Category,image,quantity)
             values('$masp','$tensanpham','$gia','$hangsp','$anh','$soluong')";
		$q=mysqli_query($con,$sql);	
  if($q){ echo "<script> alert('Thanh cong')</script>";
   header("location:quantri.php?page_layout=danhsachsp");}
	
		else {echo "<script> alert('Không thành công')</script>";}	
	}
		?>

</div>