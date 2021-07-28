<?php
$id=$_GET['oid'];
session_start(); 
if (!isset($_SESSION['uid'])) {
	echo '<script>swal({
    title: "Checkout",
    text: "Login to continue",
    type: "warning"
}).then(function() {
    window.location = "cart.php";
});</script>';
}
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
$uid=$_SESSION['uid'];
if ($id!="") {

$q=mysqli_query($con,"SELECT * FROM `user` WHERE custid='$uid'");
$r=mysqli_fetch_array($q);

$tot=0;
$gt=0;
$i=0;
  $q1=mysqli_query($con,"SELECT * FROM `cart` WHERE userid='$uid' and orderid='$id' ");
  if (mysqli_num_rows($q1)>0){
while($r1=mysqli_fetch_array($q1)){
	$tot=$tot+$r1['total'];
$gt= $r1['total']+($r1['total']*18/100);
	$i++;
}
	 ?>

		<!DOCTYPE html>
<html>
<head>	
<title>HOMEPLUS Furniture Online Shopping Website</title>
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
<style>.logo_agile h1 a {
    font-weight: 300;
    color: #0f0f0f;
    letter-spacing: 1px;
    font-size: 1.5em;
    position: relative;
}
.modal-body.modal-body-sub_agile input[type="text"], .modal-body.modal-body-sub_agile input[type="email"], .modal-body.modal-body-sub_agile input[type="password"] {
    font-size: 14px;
    letter-spacing: 1px;
    color: #ffff00;
    padding: 0.5em 1em 0.5em 0;
    border: 0;
    width: 100%;
    border-bottom: 1px solid #dcdcdc;
    background: none;
    -webkit-appearance: none;
    outline: none;
}
html, body {
    margin: 0;
    font-size: 100%;
    background: #000;
    font-family: 'Open Sans', sans-serif;
}
</style></head>



<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<?php if (isset($_SESSION['uid'])) { ?>
				 <li> <a href="logout.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logout </a></li>
				 <li><a hre="profile.php"><i class="fa fa-address-book" aria-hidden="true"></i> My Account</a></li>
			<?php } else { ?>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
		<?php  } ?>
			<li><i class="fa fa-phone" aria-hidden="true"></i>  Call : +91 9060444444</li>
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
				<h1><a ><h1><a>HomePlus</a></h1></a></h1>
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
					<li class="active menu__item menu__item--current"><a  class="menu__link" href="index.php"><i class=" glyphicon glyphicon-home"></i>Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php"><i class="fa fa-book"></i>About</a></li>

					<?php
						$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
						$sql = mysqli_query($con,"SELECT * FROM `category`");
						while($res = mysqli_fetch_array($sql))
						{
							$cid = $res['categoryid'];
							$q = mysqli_query($con,"SELECT * FROM `subcategory` WHERE categoryid='$cid'"); ?>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $res['categoryname']; ?>'s<span class="caret"></span></a>
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
		$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
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
								<input type="email" name="mail" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="pwd" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In" name="login">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href=""https://www.instagram.com/hp_homeplus/" " class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
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
		$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
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
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="cno" required="">
								<label>Contact No</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="mail" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="pass" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Register" name="ADD">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															
															<li><a href=""https://www.instagram.com/hp_homeplus/" " class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

 

<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign"> <span></span></h3>
    <div class="panel panel-default" style="background-color:transparent; width:50%; margin-left:50%;" >
    <div class="panel-heading" style="background-color:#34e5b9;">Secure Payment</div>
  <div class="panel-body">
      <form method="post" action="final.php">
        

			<input type="hidden" name="oid" value="<?php echo $id; ?>">
			<input type="hidden" name="totitem" value="<?php echo $i; ?>">

           

            <div class="styled-input agile-styled-input-top">
             
              <input id="icon_prefix" type="text" name="firstname" value="<?php echo $r['cname']; ?>" required pattern="[a-zA-Z\s]+" title="only character allowed">
              <label for="icon_prefix">First Name</label>
                     <span></span>
            </div>


			<div class="styled-input agile-styled-input-top">
                   <input id="icon_prefix" type="text" name="phone" value="<?php echo $r['contact']; ?>"  required  pattern="[0-9]{10,}" title="ten numbers required" maxlength="10">
              <label for="icon_prefix">Phone</label>
              <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                   <input id="icon_prefix" type="text" name="email" value="<?php echo $r['email']; ?>"  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
              <label for="icon_prefix">Email</label>
              <span></span>
            </div>

            <div class="styled-input agile-styled-input-top">
                         <input id="icon_prefix" type="text" name="address" required required pattern="[a-zA-Z\s]+" title="only character allowed">
              <label for="icon_prefix">Address</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                      <input id="icon_prefix" type="text" name="city" required required pattern="[a-zA-Z\s]+" title="only character allowed">
              <label for="icon_prefix">City</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                    <input id="icon_prefix" type="text" name="street" required required pattern="[a-zA-Z\s]+" title="only character allowed">
              <label for="icon_prefix">Street</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                 <input id="icon_prefix" type="text" name="pincode" pattern="[0-9]{6}" required maxlength="6">
              <label for="icon_prefix">Pincode</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                 <input id="icon_prefix" type="text" name="cardno" pattern="[0-9]{12}" required maxlength="12">
              <label for="icon_prefix">Card No</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                 <input id="icon_prefix" type="text" name="cvv" pattern="[0-9]{3}" required maxlength="3">
              <label for="icon_prefix">cvv</label>
                     <span></span>
            </div>

             <div class="styled-input agile-styled-input-top">
                 <input id="icon_prefix" type="hidden" name="amount" value="<?php echo $tot; ?>" required readonly>
              <label for="icon_prefix">Payable Amount &#8377;<?php echo $gt; ?></label>
                     <span></span>
            </div>


                <div class="center-align" style="margin-top: 100px; margin-bottom: 100px; width:100%;">
                    <button type="submit" id="confirmed" name="pay" class="btn btn-success" style="width:100%;">Pay</button>
                    
                </div>
              
        
      </form>
      </div>
      </div>
    </div>
</div>

</body>
</html>


	<?php 
	}
	else
	{
		echo '<script>alert("cart empty");window.location="cart.php";</script>';
	
	}
}
else{
echo '<script>alert("no order created");
window.location="cart.php";</script>';

}
?>

