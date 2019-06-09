
<?php
include('Connect.php');
?>
<h2>Đăng ký</h2>
<div id="main">
        <div>
        
        	<form method="post" enctype="multipart/form-data">
        <table>
        <tr>
        	<td>Họ và tên</td>
            <td><input type="text" name="name" /> </td>
        </tr>
        <tr>
        	<td>Tên tài khoản</td>
            <td><input type="text" name="acc" /></td>
        </tr>
        <tr>
        	<td>Mật khẩu</td>
            <td><input type="password" name="pass"/></td>
        </tr>
         <tr>
        	<td>Nhập lại mật khẩu</td>
            <td><input type="password" name="nlmk"/></td>
        </tr>
        <tr>
        	<td>Số điện thoại</td>
            <td><input type="text" name="sdt"/></td>
        </tr>
        <tr>
        	<td colspan="2" align="center"><input type="submit" value="Đồng ý" name="OK" /></td>
        </tr>
	</table>
</form>
</fieldset></div>
        <?php 
			if(isset($_POST['OK']))
	{
		$name=$_POST['name'];
		$account=$_POST['acc'];
		$password=$_POST['pass'];
		$nlmk=$_POST['nlmk'];
		$sdt=$_POST['sdt'];
		$sql="insert into khachhang(Name,Account,Password,Phone)values('$name','$account','$password','$sdt')";
		$thucthi=mysqli_query($con,$sql);	
  if($thucthi){ echo "<script> alert('Thanh cong')</script>";
   header("location:quantri.php?page_layout=login");}
	
		else {echo "<script> alert('Không thành công')</script>";}	
	}
		?>
 
  
</body>
</html>