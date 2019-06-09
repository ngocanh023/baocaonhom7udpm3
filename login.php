
<?php
include('Connect.php');
?>
<h2>Đăng ký</h2>
<div id="main">
	
        	<form method="post" enctype="multipart/form-data">
            	<table>
                	<tr>
                    	<td colspan="2" style="font-weight:bold"> Thông tin đăng nhập quản trị viên</td>
                    </tr>
                    <tr>
                    	<td>Username</td>
                        <td><input type="text" name="tk" /></td>
                    </tr>
                    <tr>
                    	<td>Password</td>
                        <td><input type="password" name="mk" /></td>
                    </tr>
                    <tr>
        	<td colspan="2" align="center"><input type="submit" value="Đồng ý" name="OK" /></td>
        </tr>

                </table>
            </form>
           



<?php
	
	if(isset($_POST['OK']))
	{ 
	$taikhoan=$_POST['tk'];
	$matkhau =$_POST['mk'];
	$sql=" Select * from khachhang where Account='$taikhoan' and Password='$matkhau'";
	$thucthi=mysqli_query($con,$sql);
	$num =mysqli_num_rows($thucthi);
	if ($num!=0)
		{$_SESSION['tk']=$taikhoan;
		
		if ($taikhoan=='admin')
		{header ('location:quantri.php?page_layout=danhsachspad');}
		else {header ('location:quantri.php?page_layout=danhsachsp');}}
		else {echo "<script> alert('Bạn đã đăng nhập sai tên hoặc sai mật khẩu')</script>";}
	}
?>

