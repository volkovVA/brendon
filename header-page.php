<!DOCTYPE html>
<html <?php bloginfo( 'language' ); ?>>
<head>
	<meta charset=<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicon and Apple Touch Icons -->
	<link rel="shortcut icon" href="<?php echo B_IMG_DIR ?>/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo B_IMG_DIR ?>/favicon/apple-touch-icon-114x114.png">

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


    <?php wp_head(); ?>

	<!--[if lt IE 9 ]>
<script src="/js/html5shiv-master/html5shiv.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->


</head>

<body>

	<div class="loader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>

	<!-- Header -->
	<header id="home" class="blog_head_bg">
		<div class="overlay_color">
			<div class="mnu_line">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="logo_block">
								<a href="#" class="toggle-mnu hidden-lg hidden-md hidden-sm"><span></span></a> <!-- toogle menu for small screen -->
								<?php if( has_custom_logo() ) {
									the_custom_logo();
								} else { ?>
									<h1 class="logo_img"><a class="none" href=""></a></h1>
								<?php } ?>
								<!-- <h1 class="logo"><a href="index.html">B.</a></h1>Change logo text -->
							</div>
						</div>

						<!--Desktop Main Menu-->
						<div class="col-md-10 col-sm-10 col-xs-0">
							<div class="nav_block">
								<div class="mnu hidden-xs">
									<?php wp_nav_menu([
										'theme_location'  => 'top',
										'container'       => null, 
									]); ?>
										<li class="lamp"><span></span></li>
									</ul>
								</div>
							</div>
						</div>
						<!--End Desktop Main Menu-->
						<!--Mobile Main Menu-->
						<div class="col-xs-12 top_mnu">
							<div class="mnu_menu">
								<?php wp_nav_menu([
									'theme_location'  => 'mob',
									'container'       => null, 
								]); ?>
							</div>
						</div>
						<!--End Mobile Main Menu-->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div>
			<div class="content_head">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="content_head_txt">
                                <p>MY THOUGHTS</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="content_bottom_txt">
                                <p>Take a look and share your opinion.</p>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
		</div>
	</header>
	<!-- End Header -->