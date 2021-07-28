
 <html>
 <head><script src="js/sweet.js"></script></head>
 <body>	
 <?php 
 $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
if (isset($_GET['subcatid'])) {
	$q=mysqli_query($con,"DELETE FROM `subcategory` WHERE subid=$_GET[subcatid]"); 
	if ($q) {
		echo "<script>swal('SubCategory Deleted');
		window.location='viewsubcat.php';</script>";
	}
	else{
		echo "<script>swal('error in Delete');
		window.location='viewsubcat.php';</script>";
	}
}
	?>
	</body>
	</html>
