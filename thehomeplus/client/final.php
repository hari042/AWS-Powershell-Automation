
<html>
<title> </title>
<head>    <script src="js/sweet.js"></script></head> <body> </body></html><?php 
session_start(); 
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
if (isset($_SESSION['uid'])) {
if (isset($_POST['pay'])) {
	$oid=$_POST['oid'];
	
	$q=mysqli_query($con,"SELECT * FROM `location` WHERE pincode='$_POST[pincode]'");
	if (mysqli_fetch_array($q)) {
		$qq=mysqli_query($con, "SELECT * FROM `order` WHERE userid='$_SESSION[uid]' and orderid='$oid' and status='new' ");
if(mysqli_fetch_array($qq)){

		$qc=mysqli_query($con, "SELECT * FROM `bank` WHERE `cardno`='$_POST[cardno]' and `cvv`='$_POST[cvv]'");
		if ($r=mysqli_fetch_array($qc)) {

			if ($r['amount']>=$_POST['amount']) {
				$amt=$r['amount']-$_POST['amount'];
				$ch=mysqli_query($con, "UPDATE `bank` SET `amount`='$amt' WHERE `cardno`='$_POST[cardno]' and `cvv`='$_POST[cvv]'");

				$q1=mysqli_query($con,"UPDATE `user` SET `cname`='$_POST[firstname]', `contact`='$_POST[phone]',
			`address`='$_POST[address]', `email`='$_POST[email]', `city`='$_POST[city]', `street`='$_POST[street]', `pincode`='$_POST[pincode]' WHERE `custid`='$_SESSION[uid]'");
		$q2=mysqli_query($con,"UPDATE `order` SET `date`=now(),`totalitem`='$_POST[totitem]',`totalamt`='$_POST[amount]',`status`='ordered' WHERE `userid`='$_SESSION[uid]' and `orderid`='$_POST[oid]'");
		$q3=mysqli_query($con,"UPDATE `cart` SET `status`='ordered' WHERE `orderid`='$_POST[oid]' and `userid`='$_SESSION[uid]'");
		$q5=mysqli_query($con,"SELECT * FROM `cart` WHERE `orderid`='$_POST[oid]' and `userid`='$_SESSION[uid]'");
		while($r5=mysqli_fetch_array($q5))
		{
			$q6=mysqli_query($con,"SELECT * FROM `stock` WHERE sid='$r5[pid]'");
			$r6=mysqli_fetch_array($q6);

			$qty=$r6['qty']-$r5['qty'];
			$q4=mysqli_query($con,"UPDATE `stock` SET `qty`='$qty' WHERE sid='$r5[pid]'");

		}

		if ($ch && $q1 && $q2 && $q3) {
			echo "<script>swal('payment success we will deliver your order within 5 working days');
			window.location='bill.php?oid=$oid';</script>";
		}
		else{
			echo "<script>swal('query error');
			window.location='checkout.php?oid=$oid';</script>";
		}

			}
			else{
				echo "<script>swal('insufficient balance in your account');
			window.location='checkout.php?oid=$oid';</script>";
			}
		
		
		}
		else{
			echo "<script>swal('invalid card number or cvv');
			window.location='checkout.php?oid=$oid';</script>";
		}

}else{
	echo "<script>swal('no new order to buy');
			window.location='checkout.php?oid=$oid';</script>";
}

		
	}


	else {
		echo "<script>swal('sorry Delivery not available for this location');
			window.location='checkout.php?oid=$oid';</script>";
	}


}
}else{
	echo "<script>swal('please Login to continue');
				window.location='checkout.php?oid=$oid';</script>";
}

?>