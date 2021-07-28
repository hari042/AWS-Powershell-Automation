<?php  session_start(); 
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
// $con=mysqli_connect("localhost","root","","thehomeplus");

if (isset($_POST['addtocart'])) {
	if (isset($_SESSION['uid'])) {

$uid=$_SESSION['uid'];
$stockid=$_POST['stockid'];
$price=$_POST['amount'];
$q=mysqli_query($con,"SELECT * FROM `order` WHERE userid='$uid' and status='new'");
if ($r=mysqli_fetch_array($q)) {
$oid=$r['orderid'];
$q2=mysqli_query($con,"SELECT * FROM `cart` WHERE  `orderid`='$oid' and `userid`='$uid' and pid='$stockid' and status='new' ");
if ($r2=mysqli_fetch_array($q2)) {
$cartid=$r2['cid'];
$qty=$r2['qty']+1;
												
$total=$qty*$price;

$q3=mysqli_query($con,"UPDATE `cart` SET `qty`='$qty',`price`='$price',`total`='$total' WHERE `cid`='$cartid'");
}else{
$q3=mysqli_query($con,"INSERT INTO `cart`(`orderid`, `userid`, `pid`, `qty`, `price`, `total`, `status`) VALUES ('$oid','$uid','$stockid','1','$price','$price','new')");
}
echo "<script>swal('item added to cart');
			window.location='cart.php';</script>";
}
else{
$q1=mysqli_query($con,"INSERT INTO `order`(`userid`, `date`, `status`) VALUES ('$uid',now(),'new')");
$oid=mysqli_insert_id($con);
$q2=mysqli_query($con,"SELECT * FROM `cart` WHERE  `orderid`='$oid' and `userid`='$uid' and pid='$stockid' and status='new' ");
if ($r2=mysqli_fetch_array($q2)) {
$cartid=$r2['cid'];
$qty=$r2['qty']+1;
							
$total=$qty*$price;
$q3=mysqli_query($con,"UPDATE `cart` SET `qty`='$qty',`price`='$price',`total`='$total' WHERE `cid`='$cartid'");
}else{
$q3=mysqli_query($con,"INSERT INTO `cart`(`orderid`, `userid`, `pid`, `qty`, `price`, `total`, `status`) VALUES ('$oid','$uid','$stockid','1','$price','$price','new')");
}
echo "<script>swal('item added to cart');
			window.location='cart.php';</script>";
}
}
else{
	echo "<script>swal('please Login to continue');
			window.location='cart.php';</script>";
}
		
}

 ?>

<!DOCTYPE html>
<html>
<head>
<title>HOMEPLUS Furniture Online Shopping Website </title>
<!--/tags -->
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


.element.style {
    background-color: #000;
}
.page-head_agile_info_w3l {
    background: url("imgc/bg5.jpg") no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 200px;
    padding-top: 50px;

}
.info-product-price span {
    color: #fff;
    font-size: 1em;
    font-weight: 600;
    letter-spacing: 1px;
}
</style>
</style>
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
															
															<li><a href="https://www.instagram.com/hp_homeplus/" class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>




		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
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

					<?php
						// $con=mysqli_connect("localhost","root","","thehomeplus");
						$sql = mysqli_query($con,"SELECT * FROM `category`");
						while($res = mysqli_fetch_array($sql))
						{
							$cid = $res['categoryid'];
							$q = mysqli_query($con,"SELECT * FROM `subcategory` WHERE categoryid='$cid'"); ?>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $res['categoryname']; ?><span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
									<?php while($qres = mysqli_fetch_array($q)){  ?>		
											<li><a href="products.php?subid=<?php echo $qres['subid']; ?>"><?php echo $qres['subcategoryname']; ?></a></li>
									<?php } ?>		
										</ul>
									</div>
									
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="#"><img src="admin/catimage/<?php echo $res['image']; ?>" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
				<?php } ?>

					<li class=" menu__item"><a class="menu__link" href="service.php"><i class="fa fa fa-phone-square"></i>Service</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php"><i class="fa fa fa-phone-square"></i>Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<a href="cart.php"><button class="w3view-cart" type="button" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->

<!-- //banner-top -->
<!-- Modal1 -->
<?php
		// $con=mysqli_connect("localhost","root","","thehomeplus");
		if (isset($_POST['login'])) {
		$un=$_POST['mail'];
		$pass=$_POST['pwd'];
		$q=mysqli_query($con,"SELECT * FROM `user` WHERE  `email`='$un' and `password`='$pass'");
		if ($r=mysqli_fetch_array($q)) {
			
			$_SESSION['uid']=$r['custid'];
			echo "<script>swal('Login Success');
			window.location='index.php';</script>";
		}
		else{
                 echo "<script>swal('inavalid Email or Password');</script>";
		}
		}
		
	?>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="mail" required=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="pwd" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In" name="login">
						</form>
						  
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>
														

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="imgc/signup.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->

<?php
		// $con=mysqli_connect("localhost","root","","thehomeplus");
		if (isset($_POST['ADD'])) {
		$cname=$_POST['Name'];
		$contact=$_POST['cno'];
		$email=$_POST['mail'];
		$pwd=$_POST['pass'];

		$q=mysqli_query($con,"INSERT INTO `user`(`cname`, `contact`, `email`, `password`) VALUES ('$cname','$contact','$email','$pwd')");
		if ($q) {
			 echo "<script>swal('Registartion Complete');</script>";
			     		      }
		      else
              {
                 echo "<script>swal('Registration Failed');</script>";
			     
		      }
		}
	?>

		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Register <span>Now</span></h3>
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="" pattern="[a-zA-Z\s]+" title="only character allowed">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="cno" required="" pattern="[0-9]{10,}" title="ten numbers required" maxlength="10">
								<label>Contact No</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="mail" required=""  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="pass" required=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Register" name="ADD">
						</form>
						  
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="imgc/signup.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>

<!-- //Modal2 -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
<div class="single-pro">

<?php 

if (isset($_POST['search'])) {


		$stm=$_POST['srch'];


						$qp = mysqli_query($con,"SELECT * FROM `product` where pname LIKE '%$stm%' or  `categoryid` in (SELECT `categoryid` FROM `category` WHERE  `categoryname` LIKE '%$stm%') or  `subid` in (SELECT `subid` FROM `subcategory` WHERE `subcategoryname` LIKE '%$stm%')");
						while ($rp=mysqli_fetch_array($qp)) { 

								$qs = mysqli_query($con,"SELECT * FROM `stock` where pid='$rp[pid]'");
						while ($rs=mysqli_fetch_array($qs)) { 
							?>
						
			 <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/prodimage/<?php echo $rs['image']; ?>" height="256px" width="220px" alt=" " class="pro-image-front">
										
									
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="product.php?sid=<?php  echo $rs['sid'];  ?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="product.php?sid=<?php  echo $rs['sid'];  ?>"><?php  echo $rp['pname'];  ?></a></h4>
										<div class="info-product-price">
											<span class="item_price">₹​<?php  echo $rs['price'];  ?></span>
											<!-- <del><?php  //echo $rp['pname'];  ?></del> -->
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<form action="#" method="post">
													<fieldset>
												<input type="hidden" name="stockid" value="<?php  echo $rs['sid'];  ?>" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="<?php  echo $rp['pname'];  ?>" />
												<input type="hidden" name="amount" value="<?php  echo $rs['price'];  ?>" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="Submit" name="addtocart" value="Add to cart" class="button" />
												<!-- <a href="cart.php?sid=<?php  //echo $rs['sid'];  ?>"></a> 	-->												</fieldset> 
															</form>
														</div>

									</div>
								</div>
							</div>
								<?php 	}	}  }?>
						</div>
  </div>
</div>

<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.php">TheHomePlus </a></h2>
			<p>
 The HomePlus in Balmatta, Mangalore has been in the business of retailing and distributing furniture. Opp Mangalore nursing home acts as a landmark in locating this showroom.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															
															<li><a href="https://www.instagram.com/hp_homeplus/" class="instagram" target="_blank">
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
								<p>+91 90604444449</p>
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
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>