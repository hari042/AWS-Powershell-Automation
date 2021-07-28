 <html>
 <head><script src="js/sweet.js"></script></head>
 <body>
	<?php 
	$con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
if (isset($_GET['stid'])) {
	$q=mysqli_query($con,"DELETE FROM `stock` WHERE sid=$_GET[stid]"); 
	if ($q) {
		echo "<script>swal('Stock Deleted');
		window.location='viewstock.php';</script>";
	}
	else{
		echo "<script>swal('error in Delete');
		window.location='viewstock.php';</script>";
	}
}
	?>
	</body>
	</html>
