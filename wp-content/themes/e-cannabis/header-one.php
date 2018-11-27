<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>e-cannabis</title>

	<!--required-css-->
	<link href="<?php echo  get_template_directory_uri();?>/css/style.css" rel="stylesheet">
	<link href="<?php echo  get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo  get_template_directory_uri();?>/css/bootsnav.css" rel="stylesheet">
	<link href="<?php echo  get_template_directory_uri();?>/css/reset.css" rel="stylesheet">
	<link href="<?php echo  get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo  get_template_directory_uri();?>/css/set1.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo  get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->

	<!--custom-fonts-->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<?php wp_head();?>
</head>
<?php global $woocommerce;?>
<body>
<header class="main-header  header-position">
	<section id="header-area1">
		<div class="container">
			<ul>
				<li> <p>Need help ? &nbsp;  Call 1-800-282-4912</p></li>
				<li><a href="#"><i class="fa fa-bell"></i> sign in</a></li>
				<li><a href="#">Sign up</a></li>
				<li><a href="<?php echo wc_get_cart_url();?>"><i class="fa fa-shopping-cart"></i><?php echo $woocommerce->cart->cart_contents_count;?></a></li>
			</ul>
			<!--           --><?php //wpmu_list_sites();?>
		</div>
	</section>
	<section id="area-navbar">
		<div class="container">

			<div class="col-md-2 col-lg-3 col-sm-2">
				<div class="logo-main">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo  get_template_directory_uri();?>/images/logo.png" class="img-responsive"/></a>
				</div>

			</div>

			<div class="col-md-10 col-lg-9 col-sm-10">

				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<nav class="collapse navbar-collapse js-navbar-collapse" id="ddmenu">

						<ul class="nav navbar-nav">
							<li><a href="<?php the_permalink(get_page_by_path("category1")->ID);?>"> Lakeport</a></li>
							<li><a href="#">Novato</a></li>
							<li><a href="#">Walnut Creek</a></li>
							<li><a href="#">Santa Rosa</a></li>
						</ul>
					</nav><!-- /.nav-collapse -->
				</nav>
			</div>





		</div>
	</section>
</header>
