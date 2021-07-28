<script src="js/sweet.js"></script>
<?php  session_start(); 
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");

if (!isset($_SESSION['uid'])) {
	echo "<script>alert('please Login to continue');
			window.location='index.php';</script>";
}
// $con=mysqli_connect("localhost","root","","thehomeplus");
$uid=$_SESSION['uid'];

 ?>
<!DOCTYPE html>
<html>
<head>
<title>HOMEPLUS Furniture Online Shopping Website </title>
<!--/tags -->
<title>Request For Product Service</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Request A website Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		    <script src="js/sweet.js"></script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="cssservice/style.css" rel="stylesheet" type='text/css' media="all" />
	<!-- /css -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<style>
.logo_agile h1 a {
    font-weight: 300;
    color: green;
    letter-spacing: 1px;
    font-size: 1.5em;
    position: relative;
}
html, body {
    margin: 0;
    font-size: 100%;
    background: #000;
    font-family: 'Open Sans', sans-serif;
}
.carousel .item{    
	background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/hp.jpg) no-repeat;
	background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/hp.jpg) no-repeat;
	background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/hp.jpg) no-repeat; 
	background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/hp.jpg) no-repeat;
	background-size:cover;	 
}
.carousel .item.item2{   
	background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner2.jpg) no-repeat;
	background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner2.jpg) no-repeat;
	background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner2.jpg) no-repeat; 
	background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner2.jpg) no-repeat;
	background-size:cover;	
}   
.carousel .item.item3{   
	background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner1.jpg) no-repeat;
	background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner1.jpg) no-repeat;
	background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner1.jpg) no-repeat; 
	background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(imgc/banner1.jpg) no-repeat;
	background-size:cover;	 
}   

.element.style {
    background-color: #000;
}

</style>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<?php if (isset($_SESSION['uid'])) { ?>
				 <li> <a href="logout.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logout </a></li>
				 <li><a href="profile.php"><i class="fa fa-address-book" aria-hidden="true"></i> My Account</a></li>
			<?php } else { ?>

		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
		<?php  } ?>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : +91 9060444444</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="homeplusind@gmail.com">homeplusind@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot" style="background-color:#33c6b2;">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="search.php" method="post">
					<input type="search" name="srch" placeholder="Search here..." required="">
					<input type="submit" name="search" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a>HomePlus</a></h1>
			</div>
			
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
														
															<li><a href="http://www.instagram.com" class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
														
														</ul>


		</div>

		<div class="clearfix"></div>
	</div>
</div>
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a  class="menu__link" href="index.php"><i class=" glyphicon glyphicon-home"></i>Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php"><i class="fa fa-book"></i>About</a></li>
<script type="text/javascript">
	function showHint(a) {
		xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pid").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getop.php?q="+a, true);
  xhttp.send();   
	}
</script>

<?php

if(isset($_POST['recieve'])){
  $custname=$_POST['name'];
  $address=$_POST['address'];
 $im=$_FILES['imag']['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mob'];
    $oid=$_POST['oid'];
  $pid=$_POST['pid'];
  $description=$_POST['description'];
  
 move_uploaded_file($_FILES['imag']['tmp_name'], "admin/img/".$im); 
$ins=mysqli_query($con,"INSERT INTO `service`( `order_id`, `product_id`, `description`, `type`, `price`, `cname`, `address`, `phone`, `email`, `image`) VALUES ('$oid','$pid','$description','free','0','$custname','$address','$mobile','$email','$im')");
if ($ins) {
echo "<script>swal('SUCCESSFULLY SENT DATA');window.location='index.php';</script>";
 
}
else{
echo "failed".$ins."<br>".$con->error;
}
}

?>


<?php
	$q=mysqli_query($con,"SELECT * FROM `user` where custid='$uid'"); 
$r=mysqli_fetch_array($q);
?>
<body>
	<div class="banner-layer">
		<h1 class="w3layouts">SERVICE</h1>
		<div class="content-w3ls">
			<div class="form_w3layouts">
				<!-- form starts here -->
				<form action="#" method="post" class="agile_form" enctype="multipart/form-data">
					<fieldset>
						<legend>fill out the form</legend>
						<div class="agileits-left">
							<input type="text" name="name" value="<?php echo $r['cname']; ?>" class="username" placeholder="Fullname" required="" pattern="[a-zA-Z\s]+" title="only character allowed"/ disabled>
						</div>
						<div class="s2-w3ls">
							<input type="text" name="address" value="<?php echo $r['address']; ?>" class="username" placeholder="Address" required="" disabled>
						</div>
						<div class="agileits-left">
							<input type="email" name="email" value="<?php echo $r['email']; ?>" class="username" placeholder="example@email.com" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/ disabled>
						</div>
						<div class="agileits-left s2-w3ls">
							<input type="text" name="mob" value="<?php echo $r['contact']; ?>" class="username" placeholder="Current Phone number" required="" pattern="[0-9]{10,}" title="ten numbers required" maxlength="10" />
						</div><div class="clear"></div>
						<div class="agileits-left">
						<select name="oid"  class="form-control" required onchange="showHint(this.value)">
			<option value="">Select Order</option>
		</div>
<?php
$q=mysqli_query($con,"SELECT * FROM `order` where userid='$uid' and status='ordered'");
while($r=mysqli_fetch_array($q)){

?>
		<option value="<?php echo $r['orderid']; ?>"><?php echo $r['date']; ?></option>
<?php } ?>


	</select>
</div>
						
							<!-- <input type="text" name="oid"  placeholder="order id" required=""> -->
						
						
						<div class="s2-w3ls">
						<select name="pid" id="pid"  class="form-control" required>
						<option value="">Select Product</option>
						</select>
							
						</div>
						
						
						
						<div class="">Problem with product
							<textarea name="description" class="username" placeholder="Problem with product" required="">	
							</textarea>
							</div>
							<div class="clear"></div>
							<div class="agileits-left">
							Upload picture of item
				<input type="file" name="imag" placeholder="<i>Image:</i> " required="" />
						</div>
						
						<div class="clear"></div>
						<div class="submit">
							<input type="submit" name="recieve" value="Submit Request">
						</div>
					</fieldset>
				</form>
				<!-- //form ends here -->
			</div>
	<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php">TheHomePlus </a></h2>
			<p>
 The HomePlus in Balmatta, Mangalore has been in the business of retailing and distributing furniture. Opp Mangalore nursing home acts as a landmark in locating this showroom.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															
															<li><a href="http://www.instagram.com" class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
														
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				</div>
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+91 9060444444</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="homeplusind@gmail.com"> homeplusind@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Prime Tower opp.Mangalore Nursing Home,Balmatta Road,Mangalore.57500.
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2019 HomePlus. All rights reserved | Design by :Hariprasad,Hrishikesh,Britto Xavier</p>
	</div>
</div>
</body>

</html>