<!doctype html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><? wp_title(''); ?><? if(wp_title('', false)) { echo ' :'; } ?> <? bloginfo('name'); ?></title>
	<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"> -->

	<link rel="apple-touch-icon" sizes="57x57" href="<? bloginfo('template_url'); ?>/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<? bloginfo('template_url'); ?>/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<? bloginfo('template_url'); ?>/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<? bloginfo('template_url'); ?>/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<? bloginfo('template_url'); ?>/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<? bloginfo('template_url'); ?>/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<? bloginfo('template_url'); ?>/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<? bloginfo('template_url'); ?>/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<? bloginfo('template_url'); ?>/img/apple-icon-180x180.png">
	<!-- <link rel="icon" type="image/png" sizes="192x192"  href="<? bloginfo('template_url'); ?>/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<? bloginfo('template_url'); ?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<? bloginfo('template_url'); ?>/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<? bloginfo('template_url'); ?>/img/favicon-16x16.png"> -->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<? bloginfo('template_url'); ?>/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- facebook -->

  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

	<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/style.css">

	<!-- Bootstrap and Jquery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

	<!-- Isotope -->

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

	<!-- Bx Slider -->

	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

	<!-- Google Maps -->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAilgy2TQUNXRr-fNFjjIkmyJsWTK3ko-0&callback=initMap"></script>

	<!-- Share Linkedin -->

	<script type="in/Login"></script>

	<!-- POLANTIS  -->


	<!-- FONT  -->

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<!-- <link href="https://www.fontify.me/wf/039eba77ea3ce36086f9b46b4a3316c1" rel="stylesheet" type="text/css"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<? wp_head(); ?>

	</head>
	<body <? body_class(); ?>>

		<header>

			<div class="logo_menu_open" >

				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>

			</div>

			<div class="logo_menu_close" >

				<div class="bar4"></div>
				<div class="bar5"></div>
				<div class="bar6"></div>

			</div>



			<div class="overlay_mobile">

				<div class="menu-mobile">
					<div class="nav-mobile">
						<? wp_nav_menu(array( 'menu' => 'menu-mobile', 'container' => 'nav', 'container_class' => 'menu')); ?>
					</div>
				</div>

			</div>

			<div class="wrapper_header">

				<div class="logo-header">
					<a href="<?= network_site_url(); ?>">
						Polypac
					</a>
				</div>
				<div class="container-nav">
					<div class="nav-navbar">
						<? wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => 'nav', 'container_class' => 'menu-header')); ?>
					</div>
				</div>

				<div class="menu-right-header">
					<div class="left-menu-header">
						<a href="<? site_url()?>/polypac/contact/" class="contact-header">Contact</a>
						<div class="rs">RS</div>
						<li class="rs_logo_1">
							<a target="_blank" href="https://www.facebook.com/polypacfr/">
								<div class="rs_logo_1_logo"></div>
							</a>
						</li>
						<li class="rs_logo_2">
							<a target="_blank" href="https://www.linkedin.com/company/poly-pac/?originalSubdomain=fr">
								<div class="rs_logo_2_logo"></div>
							</a>
						</li>
					</div>
					<div class="right-menu-header">

						<? global $wp; ?>
						<a href="<?= network_site_url(); ?>" class="lang_fr">FR</a>
						<a href="<?= network_site_url(); ?>/en/" class="lang_en">EN</a>
						<!-- <a href="###" class="search">Recherche</a> -->

					</div>
				</div>

			</div>

		</header>
