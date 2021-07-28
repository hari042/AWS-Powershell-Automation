<?php  session_start(); 

if (!isset($_SESSION['uid'])) {
    echo "<script>swal('please Login to continue');
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
    <script src="js/sweet.js"></script>
    <!-- modernizr css -->
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
$q=mysqli_query($con, "SELECT * FROM `order` inner join user on order.userid=user.custid WHERE order.userid='$uid' and status='ordered' order by order.orderid desc limit 1");
$r=mysqli_fetch_array($q);
$q1=mysqli_query($con,"SELECT * FROM `cart` WHERE userid='$uid' and orderid='$r[orderid]' ");

?>

                                        <div class="iv-left col-4">
                                                <span>Sold by: The HomePlus</span><br>
                                                <p>Prime Tower opp.Mangalore Nursing Home,Balmatta Road,Mangalore.575002.</p>
                                        </div>

                                        <div class="iv-left col-4" align="center">
                                                <span>INVOICE</span>
                                       </div>
                                            <div class="iv-right col-4 text-md-right">
                                                <span>Orderid #<?php echo $r['orderid'];?></span>
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
                                       <div class="col-md-6 text-md-right">
                                            <ul class="invoice-date">
                                                <li>Order Date : <?php echo $r['date'];?></li>
            
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="invoice-table table-responsive mt-5">
                                        <table class="table table-bordered table-hover text-right">
                                            <thead>
                                                <tr class="text-capitalize">

                                                    <th class="text-left">sno</th>
                                                    <th class="text-left">ITEM</th>
                                                    <th style="width: 5%; min-width: 130px;">QTY</th>
                                                    <th style="min-width: 100px">PRICE</th>
                                                      <th style="min-width: 100px">CGST</th>
                                                      <th style="min-width: 100px">SGST</th>
                                                    <th style="min-width: 100px">TOTAL AMOUNT</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php $i=0;
                                            while($r1=mysqli_fetch_array($q1))
                                            { $i++;
                                              $q2=mysqli_query($con,"SELECT * FROM `product` inner join `stock` on product.pid=stock.pid WHERE stock.sid='$r1[pid]'");
    $r2=mysqli_fetch_array($q2);
                                             $total=$total+$r1['total']+$r1['cgst']+$r1['sgst'];
                                                
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $i; ?></td>
                                                    <td class="text-left"><?php echo $r2['pname'];?></td>
                                                    <td><?php echo $r1['qty'];?></td>
                                                    <td><?php echo $r1['price'];?></td>
                                                    <td><?php echo $r1['cgst'];?></td>
                                                    <td><?php echo $r1['sgst'];?></td>
                                                    <td><?php echo $r1['total']+$r1['cgst']+$r1['sgst'];?></td>
                                                </tr>

                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">total balance :</td>
                                                    <td><?php echo  $total; ?></td>
                                                </tr>
                                            </tfoot>
                                        
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-buttons text-right">
                                    <a href="#" onClick="window.print()" class="invoice-btn">print invoice</a>
                                    <a href="index.php" class="invoice-btn">go back</a>
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
 