	<html>
	<head>    <script src="js/sweet.js"></script></head>
	<body>

		<?php
	$con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
if (isset($_GET['catid'])) {
	$q=mysqli_query($con,"DELETE FROM `category` WHERE categoryid=$_GET[catid]"); 
	if ($q) {
		echo "<script>swal('Category Deleted');
		window.location='viewcat.php';</script>";
	}
	else{
		echo "<script>swal('error in Delete');
		window.location='viewcat.php';</script>";
	}
}
	?>
	</body>
</html>
