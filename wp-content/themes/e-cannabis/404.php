<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>e-cannnibis</title>
	<!--required-css-->
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/bootsnav.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/reset.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/set1.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/error.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css">
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

</head>

<style>
	body {
		margin: 0;
		background: url(<?php echo get_template_directory_uri();?>/images/bg.png) center/cover #232323;
	}

</style>

<body>

<div class="main">
	<ul id="scene" class="scene">
		<li class="layer" data-depth="0.13">
			<div class="error">Oops</div>
		</li>
	</ul>
	<div class="relative">
		<h2>The page you are looking for doesn't exist.</h2>
		<a class="btn" href="<?php echo esc_url(home_url('/'));?>">Go back to our Homepage.</a>
	</div>
</div>

<!--required-js-->
<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.3.js"></script>

<script>
    $(window).scroll(function() {
        if($(this).scrollTop()>5) {
            $( "#area-navbar" ).addClass("fixed-me");
        } else {
            $( "#area-navbar" ).removeClass("fixed-me");
        }
    });
</script>
<script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap-dropdown-on-hover.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/parallax.min.js"></script>
<script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
</script>

</body>
</html>