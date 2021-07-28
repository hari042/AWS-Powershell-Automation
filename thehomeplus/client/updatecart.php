<?php
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
$q3=mysqli_query($con,"UPDATE `cart` SET `qty`='$_GET[qty]',`price`='$_GET[prc]',`total`='$_GET[tot]',`cgst`='$_GET[cgst]',`sgst`='$_GET[sgst]' WHERE `cid`='$_GET[cid]'");

header("location:cart.php");
?>
<script type="text/javascript">//alert('came');</script>