<!--- details -------------
	Project name : DexArte;
	Developer : Anil J;
	Page : Sidebar Menus;
	date : 19/7/2018
------------ details -->


<?php
	session_start();
	require_once "clasess/generic.class.php";
	$generic = new Generic();
	$generic->checkLoggedIn();
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
	<head>
	
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	   
 <!-- <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">-->
 
 
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
	
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dexarte | Admin-Panel</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="icon" type="image/png" href="../favicon.png">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- DataTables -->
		<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.css">
		<link rel="stylesheet" href="dist/css/style123.css">
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			page. However, you can choose any other skin. Make sure you
			apply the skin class to the body tag so the changes take effect.
		-->
		<!--<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">-->
		
		<link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        

        <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.css" rel="stylesheet" type="text/css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
         <script src="js/parsley.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>
	</head>
	<!--
	BODY TAG OPTIONS:
	=================
	Apply one or more of the following classes to get the
	desired effect
	|---------------------------------------------------------|
	| SKINS         | skin-blue                               |
	|               | skin-black                              |
	|               | skin-purple                             |
	|               | skin-yellow                             |
	|               | skin-red                                |
	|               | skin-green                              |
	|---------------------------------------------------------|
	|LAYOUT OPTIONS | fixed                                   |
	|               | layout-boxed                            |
	|               | layout-top-nav                          |
	|               | sidebar-collapse                        |
	|               | sidebar-mini                            |
	|---------------------------------------------------------|
	-->
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

			<!-- Main Header -->
			<header class="main-header">

				<!-- Logo -->
				<a href="index.php" class="logo">
				  <img src="../assets/img/WebsiteLogo.png" alt="logo" width="100">
				</a>
				
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account Menu -->
							<li class="dropdown user user-menu"><!-- start message -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
								  <span class="hidden-xs">Admin</span>
								</a>
							</li>
							
							<li class="dropdown user user-menu">
								<!-- Menu Toggle Button -->
								
								
								<a href="logout.php" class="dropdown-toggle">
									<!-- The user image in the navbar-->
									<i class="fa fa-sign-out"></i>
									
									
									<!-- hidden-xs hides the username on small devices so only the image appears. -->
									<span class="hidden-xs"><b>Sign out</b></span>
								</a>
								
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			<style>
			.main-sidebar, .left-side {
				background:url("../assets/img/admin_sidebar.jpg") repeat scroll 0 0;
				position: fixed;
			}
			
			.logo{
				position: fixed;
				top:1%;
				border-bottom:1px solid #fff;
			}
			</style>
			
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar" style="background-image:url('../assets/img/sidebar-5.jpg')no-repeat)">

				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">

					<!-- Sidebar user panel (optional) -->
					<!--<div class="user-panel">
						<a href="index.php"><img src="../images/logo.png" alt="logo" width="200"></a>
					</div>-->
					
					<?php
						$page = $_REQUEST['page'];
						$page = explode("/",$_REQUEST['page']);
						$folder = $page[0]; $file = $page[1];
						switch ($folder) {
							
							
							case "testimonials":
									$testimonials="active";
							break;
							
							
							case "blog":
									$blog="active";
							break;
							
							case "facts":
									$facts="active";
							break;
							
							case "press_media":
									$press_media="active";
							break;
							
							case "enquiry":
									$enquiry="active";
							break;
							
							case "folder":
									$folder="active";
							break;
							
							case "place":
									$place="active";
							break;
							
							case "applynow":
									$applynow="active";
							break;
							
							case "register":
									$register="active";
							break;
							
							case "newsletter":
									$newsletter="active";
							break;
							
							
							case "packages_category":
									$packages_category="active";
									$tab_packages="active";
							break;
							
							case "package":
									$package="active";
									$tab_packages="active";
							break;
							
							default:
							$index="active";
						}
					?>
					<!-- Sidebar Menu -->
					
					<!---website side --->
					<ul class="sidebar-menu">
						<br>
						<li class="header">Website</li>
						
						<li class="treeview <?php echo $tab_packages ?>">
							<a href="#"><i class="fa fa-share"></i> <span>Products</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							
							<ul class="treeview-menu">
								
								<li class="<?php echo $package ?>">
									<a href="index.php?page=package/list-package">
										<i class="fa fa-circle-o"></i>Add New Products
									</a>
								</li>
								
								<li class="<?php echo $packages_category ?>">
									<a href="index.php?page=packages_category/list-packages_category">
										<i class="fa fa-circle-o"></i>Add Products Category
									</a>
								</li>
								
							</ul>
						</li>
						
						<li class="<?php echo $testimonials ?>">
							<a href="index.php?page=testimonials/list-testimonials">
								<i class="fa fa-comments-o"></i>&nbsp; <span>Testimonials</span>
							</a>
						</li>
						
						
						<li class="<?php echo $blog ?>">
							<a href="index.php?page=blog/list-blog">
								<i class="fa fa-book"></i>&nbsp; <span>Blog</span>
							</a>
						</li>
						
						<li class="<?php echo $facts ?>">
							<a href="index.php?page=facts/list-facts">
								<i class="fa fa-pie-chart"></i>&nbsp; <span>Facts</span>
							</a>
						</li>
						
						<li class="<?php echo $press_media ?>">
							<a href="index.php?page=press_media/list-press_media">
								<i class="fa fa-newspaper-o"></i>&nbsp; <span>Press Media</span>
							</a>
						</li>
						
						
						
						<li class="<?php echo $newsletter ?>">
							<a href="index.php?page=newsletter/list-newsletter">
								<i class="fa fa-newspaper-o"></i>&nbsp; <span>Newsletter</span>
							</a>
						</li>
						
					</ul>
					
					<br><br>
					<!---- Process management ---->
					<ul class="sidebar-menu">
						
						<li class="header">Process Management System</li>
						
						<li class="<?php echo $register ?>">
							<a href="index.php?page=register/list-register">
								<i class="fa fa-users"></i>&nbsp; <span>Sales User</span>
							</a>
						</li>
						
						<li class="treeview <?php echo $orders ?>">
							
							<a href="#"><i class="fa fa-life-ring"></i> <span>Orders</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							
							<ul class="treeview-menu">
								<li class="<?php echo $orders ?>">
									<a href="index.php?page=orders/list-orders">
										<i class="fa fa-circle-o"></i>&nbsp; <span>Complete Orders</span>
									</a>
								</li>
								
								<li class="<?php echo $orders ?>">
									<a href="index.php?page=orders/list-orders-pending">
										<i class="fa fa-circle-o"></i>&nbsp; <span>Pending Orders</span>
									</a>
								</li>
							</ul>
							
						</li>
						
						<li class="<?php echo $folder ?>">
							<a href="index.php?page=folder/list-folder">
								<i class="fa fa-folder-open"></i>&nbsp; <span>Folder</span>
							</a>
						</li>
						
						<li class="<?php echo $enquiry ?>">
							<a href="index.php?page=enquiry/list-enquiry">
								<i class="fa fa-edit"></i>&nbsp; <span>Enquiry</span>
							</a>
						</li>
						
						<li class="<?php echo $place ?>">
							<a href="index.php?page=place/list-place">
								<i class="fa fa-map-marker"></i>&nbsp; <span>Place</span>
							</a>
						</li>
						
					</ul>
					<!-- /.sidebar-menu -->
				</section>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?php
							if($folder==""){
								echo ucfirst($folder ="Dashboard");
							}
							elseif ($folder=="package"){
								echo ucfirst($folder ="Product");
							}
							elseif ($folder==packages_category){
								echo ucfirst($folder ="Product Category");
							}

							elseif($folder=="register"){
								echo ucfirst($folder = "users");
							}
							else{
								echo ucfirst($folder);
								}
							
						?>
						<small>Control panel</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-dashboard"></i> home</a></li>
						<li class="active"><?php echo $folder;?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">

					<!-- Your Page Content Here -->
					
					<?php
						if($_REQUEST['page']!=""){
							$page = explode("/",$_REQUEST['page']);
							$folder = $page[0];
							$file = $page[1];
							if($folder==""){
								require_once "$file.php"; ?>
								<script src="js/<?php echo $file ?>.js"></script> <?php
							}else{
								require_once "$folder/$file.php"; ?>
								<script src="<?php echo $folder ?>/js/<?php echo $file ?>.js"></script> <?php
							}
						}else{
							require_once("dashboard.php");
					   }
					?>
	  
	  
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="pull-right hidden-xs">
					Developed by <a href="http://www.macle.co.in/" target="__blank">Macle Grafics Pvt.Ltd</a>
				</div>
				<!-- Default to the left -->
				<strong>Copyright &copy; 2018 <a href="#" target="__blank">Dexarte</a>.</strong> All rights reserved.
			</footer>
		</div>
		<!-- ./wrapper -->

		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
		<!-- SlimScroll -->
		<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="plugins/fastclick/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<!-- page script -->
		
		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>

		
	</body>
</html>
