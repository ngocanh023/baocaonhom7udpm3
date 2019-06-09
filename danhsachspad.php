
<?php
include('Connect.php');
?>
<h2>Thông tin sản phẩm</h2>
    <div id="main">
     <p id="add-prd">
     <table style="float:right; background:#FCF">
     <tr><td><a href="quantri.php?page_layout=themsp"><h3>Thêm mới sản phẩm</h3></a></p> </td></tr> </table> 
    <?php 
 	$sql="select * from sanpham ";
	$thucthi= mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($thucthi))
	{
 ?>

 		
        	<form method="post" enctype="multipart/form-data">
        <table>
     <tr><td><p><img src="anh/<?php echo $row['image'];?>" width="150px" height="170px"/></p></td></tr>
     <tr>	
     <tr><td><p> Tên sản phẩm:  <?php echo $row['Name'];?> </p></td></tr>
     <tr><td><p> Giá sản phẩm:  <?php echo $row['Price'];?></p></td></tr>
     <tr><td><p> Hãng sản phẩm: <?php echo $row['Category'];?></p></td></tr> 
     <tr><td><p> Số lượng:      <?php echo $row['quantity'];?></p></td></tr>
   </tr></table>
   <table>
    <tr>
   <td style="width:50px"><a href='Delete.php?id	="<?php echo $num['Code'];?>"' onclick="if(confirm('Bạn có chắc muốn xóa không?')) return true;else return false;" style="color:#00F"</a>Xóa</td>
    <td> <p><a href='update.php?id=<?php echo $num['Code'];  ?>' style="color:#00F">Sửa</a></p></td></tr>
  
    </tr></table>
    
        <?php } ?>   
     </div>