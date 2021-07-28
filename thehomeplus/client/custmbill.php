<?php  session_start(); 

if (!isset($_SESSION['uid'])) {
    echo "<script>alert('please Login to continue');
            window.location='index.php';</script>";
}
$con=mysqli_connect("localhost","root","Home@123","thehomeplus");
$uid=$_SESSION['uid'];

 ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OCD - Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="js/sweet.js"></script>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
  <?php
$total=0;
$q=mysqli_query($con, "SELECT * FROM `customization` inner join user on customization.custid=user.custid WHERE customization.custid='$uid' and status='accepted' ");
$r=mysqli_fetch_array($q);
//$q1=mysqli_query($con,"SELECT * FROM `cart` WHERE userid='$uid' and orderid='$r[orderid]' ");

?>

                                        <div class="iv-left col-4">
                                                <span>Sold by: The HomePlus</span><br>
                                                <p>Prime Tower opp.Mangalore Nursing Home,Balmatta Road,Mangalore.575002.</p>
                                        </div>

                                        <div class="iv-left col-4" align="center">
                                                <span>INVOICE</span>
                                       </div>
                                            <div class="iv-right col-4 text-md-right">
                                                <span>Customization_id #<?php echo $r['customization_id'];?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="invoice-address">
                                                <h3>invoiced to</h3>
                                                <h5><?php echo $r['cname'];?></h5>
                                                <p><?php echo $r['address'];?></p>
                                                <p><?php echo $r['city'];?></p>
                                                <p><?php echo $r['pincode'];?></p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="invoice-table table-responsive mt-5">
                                        <table class="table table-bordered table-hover text-right">
                                            <thead>
                                                <tr class="text-capitalize">

                                                    <th class="text-left">sno</th>
                                                    <th class="text-left">Customization id</th>
                                                    <th style="width: 5%; min-width: 130px;">Customer Name</th>
                                                    <th style="min-width: 100px">Estimated PRICE</th>
                                                    <th style="min-width: 100px">Estimated period</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                  
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-left"><?php echo $r['customization_id'];?></td>
                                                    <td><?php echo $r['cname'];?></td>
                                                    <td><?php echo $r['price'];?></td>
                                                    <td><?php echo $r['delivery'];?></td>
                                                    <td><?php echo $r['status'];?></td>
                                                </tr>

                                                                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Grand Total :</td>
                                                    <td><?php echo $r['price'];?></td>
                                                </tr>
                                            </tfoot>
                                        
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-buttons text-right">
                                    <a href="#" onClick="window.print()" class="invoice-btn">print invoice</a>
                                    <a href="#" class="invoice-btn">send invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>
 