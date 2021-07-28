
<?php  session_start(); 

if (!isset($_SESSION['uid'])) {
   echo "<script>alert('please Login to continue');
         window.location='index.php';</script>";
}
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
$uid=$_SESSION['uid'];

 ?>
<!DOCTYPE html>
<html>
<head>
<title>HOMEPLUS Furniture Online Shopping Website </title>

<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Customer Survey Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
         <script src="js/sweet.js"></script>
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="cssfeedback/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta name="keywords" content="Business Consultancy Form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
   <script>
      addEventListener("load", function () {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } </script>
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
    font-size: 1.0em;
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


</style>
</head>
<body>
<!-- header -->
<div class="header" id="home">
   <div class="container">
      <ul>
         <?php if (isset($_SESSION['uid'])) { ?>
             <li> <a href="logout.php" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logout </a></li>
             <li><a href="profile.php"><i class="fa fa-address-book" aria-hidden="true"></i> My Account</li>
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
  <h1 class="header-w3ls" font color="black">
         Customer Feedback Form
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="#" method="post">
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <p>Name</p>
                  <input type="text" class="form-control" name="name" placeholder="" required="">
               </div>
               <div class="form-mid-w3ls">
                  <p>Email</p>
                  <input type="email" class="form-control" name="email" placeholder="" required="">
               </div>
            </div>
            <div class="personal-info">
               <p>Is this first time You are buying our products & service?</p>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select4" value="yes" checked="">
                  <label class="form-check-label">
                  Yes
                  </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select4" value="no">
                  <label class="form-check-label">
                  No
                  </label>
               </div>
            </div>
            <div class="personal-info">
               <p>Would you suggestion to your friends and colleague?</p>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select5" value="yes" checked="">
                  <label class="form-check-label">
                  Yes
                  </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select5" value="no">
                  <label class="form-check-label">
                  No
                  </label>
               </div>
            </div>
            <div class="personal-info">
               <p>How satisfied are you with our company overall?</p>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select6" value="satisfied" checked="">
                  <label class="form-check-label">
                  Satisfied
                  </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select6" value="undecided">
                  <label class="form-check-label">
                  Undecided
                  </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="select6" value="unsatisfied">
                  <label class="form-check-label">
                  Unsatisfied
                  </label>
               </div>
            </div>
            <div class="form-control-w3l">
               <p>Do you have suggestion to improve our products and service?</p>
               <textarea name='msg' placeholder="" required=""></textarea>
            </div>
            <div class="form-group">
            </div>
            <input type="submit" name="submit" value="Submit">
         </form>
      </div>
      <div class="copy">
         <p>©Customer Feedback Form. All Rights Reserved | Design by <a href="index.php" target="_blank">HOME PLUS</a></p>
      </div>
      	<?php
$con=mysqli_connect("Localhost","root","Home@123","homeplus");
if(isset($_POST['submit'])){
  $custname=$_POST['name'];
  $email=$_POST['email'];
  $descri=$_POST['msg'];
  $selct=$_POST['select4'];
  $selectt=$_POST['select5'];
  $selecttt=$_POST['select6'];
  
  
$ins=mysqli_query($con,"INSERT into feedback(name,email,q1,q2,q3,suggestion) 
  values('$custname','$email','$selct','$selectt','$selecttt','$descri')");
if ($ins) {
echo "<script>swal('SUCCESSFULLY SENT DATA');window.location='index.php';</script>";
  # code...
}
else{
echo "failed".$ins."<br>".$con->error;
}
}

?>
   </body>
</html>