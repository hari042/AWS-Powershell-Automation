<?php $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/sweet.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('https://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/white-wallpapers-4.jpg');background-size:cover;width:100%;height:100vh;overflow:auto;">
	<?php
		// $con=mysqli_connect("localhost","root","","thehomeplus");
		if (isset($_POST['login'])) {
		$un=$_POST['uname'];
		$pass=$_POST['pwd'];
		$q=mysqli_query($con,"SELECT * FROM `admin` WHERE  `username`='$un' and `password`='$pass'");
		if ($r=mysqli_fetch_array($q)) {
			session_start();
			$_SESSION['admin']=$r['aid'];
			header("location:adminhome.php");
		}
		else{
                 echo "<script>swal('inavalid user name or password');</script>";
		}
		}
		
	?>
	<div class="container" style="margin-left:25%;margin-top: 10%;">
  <h2 >Admin Login</h2>
  <div class="panel panel-default" style="width:50%;">
    <div class="panel-body" style="background-color:transparent;">
    	
<form action="" method="post" autocomplete="off">
	<div class="form-group">
		<label for="uname">User Name:</label>
	<input type="text" id="uname"   maxlength="10" class="form-control" placeholder="Enter Useranme" name="uname" required >
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
	<input type="password" id="pwd"  maxlength="32" class="form-control" placeholder="Enter Password" name="pwd" required>
	</div>
	<div class="form-group" style="text-align: center;" >
	<input type="submit" name="login"   class="btn btn-default">
	
</form>
</div>
 
  </div>
</div>
</body>
</html>