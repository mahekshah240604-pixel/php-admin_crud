<?php
require './class/abcclass.php';
$msg="";
if($_POST)
{
	$Order_date	=mysqli_real_escape_string($connection,$_POST['Order_date']);
	$Customer_id=mysqli_real_escape_string($connection,$_POST['Customer_id']);
    $Order_shiping_name=mysqli_real_escape_string($connection,$_POST['Order_shiping_name']);
    $Order_satetus=mysqli_real_escape_string($connection,$_POST['Order_satetus']);
    $Order_paymentmode=mysqli_real_escape_string($connection,$_POST['Order_paymentmode']);
	$Oreder_shipping_address=mysqli_real_escape_string($connection,$_POST['Oreder_shipping_address']);
	$Oreder_shipping_mobile=mysqli_real_escape_string($connection,$_POST['Oreder_shipping_mobile']);

	



$query=mysqli_query($connection,"insert into tbl_ordermaster(Order_date,Customer_id,Order_shiping_name,Order_satetus,Order_paymentmode,Oreder_shipping_address,Oreder_shipping_mobile) values('{$Order_date}','{$Customer_id}','{$Order_shiping_name}','{$Order_satetus}','{$Order_paymentmode}','{$Oreder_shipping_address}','{$Oreder_shipping_mobile}')") or die(mysqli_error($connection));

if($query)
{
	$msg='<div class="alert alert-success" roll="alert">
	record addded
	</div>';
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php
			include './thimpart/sidebar.php';
		?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->

				<?php
					include './thimpart/heder.php';
				?>
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img style='width:100px' src="my-img/10.jpeg" alt=""> </span> 
									<div class="user-name">
										<p>MD</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i> 
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				
				<div class="forms">
					<h2 class="title1">Oreder forms</h2>
					<?php
					echo $msg;
					?>
								<h4>Add Order infermation :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Order_date</label> 
								 <div class="col-sm-9">
								 <input type="date" class="form-control" id="inputEmail3" name="Order_date" placeholder="enter Order date" required> 
								</div> </div> 
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_id</label> 
								 <div class="col-sm-9">
                                    <?php
                                        $cq=mysqli_query($connection,"select * from tbl_customer");
                                        echo "<select name='Customer_id'>";
                                        echo "<option value=''>Select</option>";
                                        while ($row=mysqli_fetch_array($cq)){
                                            echo "<option value='{$row['Customer_id']}'> {$row['Customer_firstname']}</option>";
                                        }
                                        echo "</select>";
                                    ?>
								</div> </div>
								
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Order_shiping_name</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" name="Order_shiping_name" placeholder="enter Order shiping name" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Order_satetus</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" name="Order_satetus" placeholder="enterOrder satetus" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Order_paymentmode</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" name="Order_paymentmode" placeholder="enterOrder paymentmode" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Oreder_shipping_address</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" name="Oreder_shipping_address" placeholder="enterOrder deliverydate" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Oreder_shipping_mobile</label> 
								 <div class="col-sm-9">
								 <input type="number" class="form-control" id="inputEmail3" name="Oreder_shipping_mobile" placeholder="enterTotal amt" required> 
								</div> </div>
								<div class="col-sm-offset-2"> 
								<button type="submit" class="btn btn-primary">Add order</button>
								<button type="rester" class="btn btn-danger">reset</button>
								<button type="button"  onclick="window.location='display-order.php'; "class="btn btn-info">view</button>
								</div> 
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<?php
		include './thimpart/footer.php';
		?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>