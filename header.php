    <!DOCTYPE html>
	<?php
	$page = $_SERVER['REQUEST_URI'];	
	?>
    <html lang="en">

    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="keywords" content="" />
    	<meta name="author" content="" />
    	<meta name="robots" content="" />
    	<meta name="description" content="Industry - Factory & Industrial HTML Template" />
    	<meta property="og:title" content="Industry - Factory & Industrial HTML Template" />
    	<meta property="og:description" content="Industry - Factory & Industrial HTML Template" />
    	<meta property="og:image" content="" />
    	<meta name="format-detection" content="telephone=no">

    	<!-- FAVICONS ICON -->
    	<link rel="icon" href="images/logo-icon.png" type="image/x-icon" />
    	<link rel="shortcut icon" type="image/x-icon" href="images/logo-icon.png" />

    	<!-- PAGE TITLE HERE -->
    	<title>DEOS Dijital Otomasyon LTD. ŞTİ.</title>

    	<!-- MOBILE SPECIFIC -->
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    	<!-- STYLESHEETS -->
    	<link rel="stylesheet" type="text/css" href="css/plugins.css">
    	<link rel="stylesheet" type="text/css" href="css/style.min.css">
    	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-4.min.css">
    	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
    	<!-- Google Font -->
    	<style>
    		@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    	</style>

    	<!-- REVOLUTION SLIDER CSS -->
    	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/revolution.min.css">

    </head>

    <body id="bg">
    	<div class="page-wraper">
    		<div id="loading-area"></div>
    		<!-- header -->
    		<header class="site-header mo-left header navstyle2">
    			<!-- main header -->
    			<div class="sticky-header main-bar-wraper header-curve navbar-expand-lg">
    				<div class="main-bar clearfix bg-primary">
    					<div class="container clearfix">
    						<!-- website logo -->
    						<div class="logo-header mostion logo-dark">
    							<a href="index.php"><img src="images/logo.gif" alt=""></a>
    						</div>
    						<!-- nav toggle button -->
    						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    							<span></span>
    							<span></span>
    							<span></span>
    						</button>
    						<!-- extra nav -->
    						<div class="extra-nav">
    							<div class="extra-cell">
    								<button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
    							</div>
    						</div>
    						<!-- Quik search -->
    						<div class="dlab-quik-search ">
    							<form action="#">
    								<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
    								<span id="quik-search-remove"><i class="ti-close"></i></span>
    							</form>
    						</div>
    						<!-- main nav -->
    						<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
    							<div class="logo-header d-md-block d-lg-none">
    								<a href="index.php"><img src="images/logo.gif" alt=""></a>
    							</div>
    							<ul class="nav navbar-nav">
    								<li class="<?php if($page=='/index.php'){ echo 'active'; } ?> has-mega-menu"> <a href="index.php">Ana Sayfa</a></li>
    								<li class="<?php if($page=='/hakkimizda.php'){ echo 'active'; } ?> has-mega-menu"> <a href="hakkimizda.php">Hakkımızda</a></li>
    								<li>
    									<a href="javascript:;">Kurumsal<i class="fa fa-chevron-down"></i></a>
    									<ul class="sub-menu right">
    										<li><a href="vizyonumuz.php">Kuruluşumuzun Vizyonu</a></li>
    										<li><a href="misyonumuz.php">Kuruluşumuzun Misyonu</a></li>
    										<li><a href="kvkk.php">KVKK Metni</a></li>
    										<li><a href="tarihcemiz.php">Tarihçemiz</a></li>
    									</ul>
    								</li>
    								<li class="<?php if($page=='/contact.php'){ echo 'active'; } ?> has-mega-menu"> <a href="contact.php">İletişim</a></li>
    							</ul>
    							<div class="dlab-social-icon ind-social">
    								<ul>
    									<li><a class="site-button-link facebook fa fa-facebook" href="javascript:void(0);"></a></li>
    									<li><a class="site-button-link twitter fa fa-twitter" href="javascript:void(0);"></a></li>
    									<li><a class="site-button-link linkedin fa fa-linkedin" href="javascript:void(0);"></a></li>
    									<li><a class="site-button-link instagram fa fa-instagram" href="javascript:void(0);"></a></li>
    								</ul>
    								<p><?php echo date('Y') ?> DEOS LTD </p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- main header END -->
    		</header>
    		<!-- header END -->