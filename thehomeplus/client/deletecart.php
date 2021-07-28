	<?php
	$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
if (isset($_GET['cartid'])) {
	$q3=mysqli_query($con,"DELETE FROM `cart` WHERE `cid`=$_GET[cartid]"); 

	if ($q3) {
		echo "<script>
		window.location='cart.php';</script>";
	}
}
	?>

