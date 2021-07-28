 <html>
 <head><script src="js/sweet.js"></script></head>
 <body>
<?php $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); 
$id=$_GET['q'];
$q=mysqli_query($con,"SELECT * FROM `subcategory` where categoryid='$id'");
?>
<option value="">select sub category</option>
<?php
while($r=mysqli_fetch_array($q)){

?>
		<option value="<?php echo $r['subid'] ?>"><?php echo $r['subcategoryname'] ?></option>

<?php } ?>
