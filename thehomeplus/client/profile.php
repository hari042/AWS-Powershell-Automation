<?php $con=mysqli_connect("localhost","root","Home@123","thehomeplus"); ?>
<!DOCTYPE html>
<html>	
<head>
<title>Customer Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
 <meta name="keywords" content="Square Profile Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
 
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="cssprofile/style.css" rel='stylesheet' type='text/css' />

<!--webfonts-->

<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<!--//webfonts-->

<?php  session_start(); 
// $con=mysqli_connect("localhost","root","","thehomeplus");
 ?>
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
    color: #0f0f0f;
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
			
				<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
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
				 <li><a href="profile.php" ><i class="fa fa-address-book" aria-hidden="true"></i> My Account</a></li>
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
														
															<li><a href=""https://www.instagram.com/hp_homeplus/" " class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
														
														</ul>


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
					<li class=" menu__item"><a  class="menu__link" href="index.php"><i class=" glyphicon glyphicon-home"></i>Home <span class="sr-only">(current)</span></a></li>
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


	<!-- main -->
	
<div class="center-container" style="float:left; width:100%;"  >
		






<div class="tab" style="width:100%;" >
  <button style="margin-left:45%;" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">My Order</button>
</div>
<?php $q=mysqli_query($con,"SELECT * FROM `user` WHERE custid='$_SESSION[uid]'");
$r=mysqli_fetch_array($q); ?>
<div id="London" class="tabcontent" style="height:100%; width:100%; color:#fff;">

  <h3><?php echo $r['cname']; ?></h3>
  <p><?php echo $r['contact']; ?></p>
  <p><?php echo $r['email']; ?></p>
</div>

<div id="Paris" class="tabcontent" style="height:100%; width:100%; color:#fff;">
<?php 

$q7=mysqli_query($con,"SELECT * FROM `cart` inner join stock on cart.pid=stock.sid WHERE cart.userid='$_SESSION[uid]' and cart.status='ordered' ");
	
	while($rs=mysqli_fetch_array($q7)){
		$qp = mysqli_query($con,"SELECT * FROM `product` where pid='$rs[pid]'");
						$rp=mysqli_fetch_array($qp);

	?>

<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/prodimage/<?php echo $rs['image']; ?>" height="200px" width="200px" alt=" " class="pro-image-front">				
										<img src="admin/prodimage/<?php echo $rs['image1']; ?>" height="200px" width="200px" alt=" " class="pro-image-back">	
									</div>
									
									<div class="item-info-product ">
										<h4><?php  echo $rp['pname'];  ?></h4>
										<div class="info-product-price">
											₹​ <?php  echo $rs['price']; ?>
										</div>
										

									</div>
									
								</div>
							</div>
							<?php } ?>
  
</div>
</div>




			
	

					
					
					
			
			
	<!-- footer -->
<div class="footer" style="float:left;">
	<div class="footer_agile_inner_info_w3l" >
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

		<p class="copy-right">copy 2019 HomePlus. All rights reserved | Design by :Hariprasad,Hrishikesh,Britto Xavier</p>
	</div>

<!-- //footer -->


			
		
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script  src="js/jquery.min.v3.js"></script>
		<script src="js/jquery.circlechart.js"></script>
<script>
$('.demo-1').percentcircle();

$('.demo-2').percentcircle({
animate : false,
diameter : 100,
guage: 3,
coverBg: '#000',
bgColor: '#ff0000',
fillColor: '#000',
percentSize: '50px',
percentWeight: 'normal'
});
		
			
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
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