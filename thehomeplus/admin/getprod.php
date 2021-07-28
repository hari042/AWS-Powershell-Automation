 <html>
 <head><script src="js/sweet.js"></script></head>
 <body>
<?php $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
$id=$_GET['q'];
$q=mysqli_query($con,"SELECT * FROM `product` WHERE subid='$id'");
?>
<option value="">select product</option>
<?php
while($r=mysqli_fetch_array($q)){

?>
		<option value="<?php echo $r['pid'] ?>"><?php echo $r['pname'] ?></option>

<?php } ?>
</body>
</html>