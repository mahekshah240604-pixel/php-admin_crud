<?php
require './class/abcclass.php';

$editid=$_GET['eid'];

if(!isset($_GET['eid']) || empty($_GET['eid']))
{
	header("location:display-customer.php");
}


$selectq=mysqli_query($connection,"select * from tbl_customer where Customer_id='{$editid}' ") or die(mysqli_error($connection));
$selectrow=mysqli_fetch_array($selectq);
print_r($selectrow);
$msg="";
if($_POST)
{
	$id=$_POST['id'];
	$Customer_password=mysqli_real_escape_string($connection,$_POST['Customer_password']);
	$Customer_firstname=mysqli_real_escape_string($connection,$_POST['Customer_firstname']);
	$Customer_middlename=mysqli_real_escape_string($connection,$_POST['Customer_middlename']);
    $Customer_lastname=mysqli_real_escape_string($connection,$_POST['Customer_lastname']);
    $Customer_email=mysqli_real_escape_string($connection,$_POST['Customer_email']);
    $Customer_contect=mysqli_real_escape_string($connection,$_POST['Customer_contect']);
    $Customer_address=mysqli_real_escape_string($connection,$_POST['Customer_address']);
	$Customer_otp=mysqli_real_escape_string($connection,$_POST['Customer_otp']);


$query=mysqli_query($connection,"update tbl_customer set Customer_password='{$Customer_password}',Customer_firstname='{$Customer_firstname}',Customer_middlename='{$Customer_middlename}',Customer_lastname='{$Customer_lastname}',Customer_email='{$Customer_email}',Customer_contect='{$Customer_contect}',Customer_address='{$Customer_address}',Customer_otp='{$Customer_otp}' where Customer_id='{$id}'") or die(mysqli_error($connection));

if($query)
{
	echo "<script>alert('record updataed');window.location='display-customer.php';</script>";
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
					<h2 class="title1">customer forms</h2>
					<?php
					echo $msg;
					?>
								<h4>Edit customer infermation :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="post" enctype="multiple/form-data"> 

								<input type="hidden" name="id" value="<?php echo $selectrow['Customer_id'] ?>">
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_password</label> 
								 <div class="col-sm-9">
								 <input type="password" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_password'] ?>" name="Customer_password" placeholder="enter Customer password" required> 
								</div> </div> 
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_firstname</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_firstname'] ?>" name="Customer_firstname" placeholder="enter Customer  firstname" required> 
								</div> </div>
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_middlename</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_middlename'] ?>" name="Customer_middlename" placeholder="enter Customer middlename" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_lastname</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_lastname'] ?>" name="Customer_lastname" placeholder="enter Customer lastname" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_email</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_email'] ?>" name="Customer_email" placeholder="enter Customer email" required> 
								</div> </div>
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_contect</label> 
								 <div class="col-sm-9">
								 <input type="number" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_contect'] ?>" name="Customer_contect" placeholder="enter Customer contectd" required> 
								</div> </div>
                               
                                <div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_address</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3"  value="<?php echo $selectrow['Customer_address'] ?>" name="Customer_address" placeholder="enter Customer address " required> 
								</div> </div>
                               
								<div class="form-group">
								 <label for="inputEmail3" class="col-sm-2 control-label">Customer_otp</label> 
								 <div class="col-sm-9">
								 <input type="text" class="form-control" id="inputEmail3" value="<?php echo $selectrow['Customer_otp'] ?>" name="Customer_sreetAdd" placeholder="enter Customer sreetAdd " required> 
								</div> </div>
								<div class="col-sm-offset-2"> 
								<button type="submit" class="btn btn-primary">Add customer</button>
								<button type="rester" class="btn btn-danger">reset</button>
								<button type="button"  onclick="window.location='display-customer.php'; "class="btn btn-info">view</button>
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