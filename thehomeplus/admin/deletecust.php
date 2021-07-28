<html>
<head> <script src="js/sweet.js"></script>
</head>	<body>			
		
	<?php 
	$con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
if (isset($_GET['cid'])) {
	$q=mysqli_query($con,"DELETE FROM `user` WHERE custid=$_GET[cid]"); 
	if ($q) {
		echo "<script>swal('Category Deleted');
		window.location='custdetails.php';</script>";
	}
	else{
		echo "<script>swal('error in Delete');
		window.location='custdetails.php';</script>";
	}
}
	?>
</body>
</html>
