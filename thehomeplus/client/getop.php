<?php
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
$id=$_GET['q'];
$q=mysqli_query($con,"SELECT * FROM `cart` where orderid='$id'");
?>
<option value="">Select Product</option>
<?php
while($r=mysqli_fetch_array($q)){
$q2=mysqli_query($con,"SELECT * FROM `product` inner join `stock` on product.pid=stock.pid WHERE stock.sid='$r[pid]'");
	$r2=mysqli_fetch_array($q2);
?>
		<option value="<?php echo $r['pid'] ?>"><?php echo $r2['pname'] ?></option>

<?php } ?>