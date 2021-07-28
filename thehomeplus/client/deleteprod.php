 <html><head><script src="js/sweet.js"></script></head>		
 <body>		
					
		<?php
	<?php  
	$con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
if (isset($_GET['prodid'])) {
		$q1=mysqli_query($con,"DELETE FROM `stock` WHERE pid=$_GET[prodid]"); 
	$q=mysqli_query($con,"DELETE FROM `product` WHERE pid=$_GET[prodid]"); 
	if ($q) {
		echo "<script>swal('Product Deleted');
		window.location='viewproduct.php';</script>";
	}
	else{
		echo "<script>swal('error in Delete');
		window.location='viewproduct.php';</script>";
	}
}
	?>
	</body>
	</html>