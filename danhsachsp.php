
<?php
include('Connect.php');
?>
<h2>Thông tin sản phẩm</h2>
    <div id="main">
     <p id="add-prd"><a href="quantri.php?page_layout=themsp"><span>thêm sản phẩm mới</span></a></p>   
    <?php 
 	$sql="select * from sanpham ";
	$thucthi= mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($thucthi))
	{
 ?>

 		
        	<form method="post" enctype="multipart/form-data">
        <table >
     <tr><td><p><img src="anh/<?php echo $row['image'];?>" width="150px" height="170px"/></p></td></tr>
     <tr>	
     <tr><td><p> Tên sản phẩm:  <?php echo $row['Name'];?> </p></td></tr>
     <tr><td><p> Giá sản phẩm:  <?php echo $row['Price'];?></p></td></tr>
     <tr><td><p> Hãng sản phẩm: <?php echo $row['Category'];?></p></td></tr> 
     <tr><td><p> Số lượng:      <?php echo $row['quantity'];?></p></td></tr>
   </tr>
  </table>
  <table bgcolor="#E75A85"> 
     <tr>
    <td><a href='Muahang.php?id=<?php echo $num['Code'];  ?>' style="color:#FFF"></a><input type="submit" value="MUA NGAY" /></td></tr>
   </table>
    </form>
  
        <?php } ?>   
     </div>