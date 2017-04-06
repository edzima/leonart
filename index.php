<?php
	require_once 'i18n/i18n.class.php';
    // session
    session_start();
    // include i18n class and initialize it
    $i18n = new i18n('i18n/lang/lang_{LANGUAGE}.json', 'i18n/langcache/', 'en');
    // get user lang and save in session
    if(isset($_GET['lang'])) $_SESSION['userlanguage'] = $_GET['lang'];
    if(isset($_SESSION['userlanguage'])) $i18n->setForcedLang($_SESSION['userlanguage']) ;
	// init object: load language files, parse them if not cached, and so on.
	$i18n->init();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Morphext -->
    <link rel="stylesheet" href="css/morphext.css">

    <style>
        .button-lang{
            padding: 10px 15px;
            margin: -12px;
            border: 1px solid white;
            background-color: transparent;
        }
    </style>


	<!-- Document Title
	============================================= -->
	<title>Canvas Slider with Autoplay | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">
						<ul>
                            <li class="current"><a href="index.html"><div>Home</div></a></li>
                            <li><a href="about.html"><div><?php echo L::about; ?></div></a></li>
                            <li><a href="services-3.html"><div><?php echo L::services; ?></div></a></li>
                            <li><a href="portfolio-ajax.html"><div><?php echo L::portfolio; ?></div></a></li>
                            <li><a href="contact.php"><div><?php echo L::contact; ?></div></a></li>
                            <li > <a href="#" class=""><div class="button-lang"><?php echo $i18n->getAppliedLang(); ?></div></a>
                                <ul>
                                    <li><a href="index.php?lang=pl"><div>PL</div></a></li>
                                    <li><a href="index.php?lang=en"><div>EN</div></a></li>
                                </ul>
                            </li>
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="7000" data-speed="650" data-loop="true">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp"><p>Applied Language: <?php echo $i18n->getAppliedLang(); ?> </p>

                                    <!-- get the cache path -->
                                    <p>Cache path: <?php echo $i18n->getCachePath(); ?></p>I am a <span id="js-rotating">So Simple, Very Doge, Much Wow, Such Cool</span> Text Rotator</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video id="slide-video" poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='images/videos/explore.webm' type='video/webm' />
									<source src='images/videos/explore.mp4' type='video/mp4' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</section>



        <footer id="footer" class="dark">
            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                        <div class="col-md-4" style="color: rgba(255,255,255,0.3);">
                            &copy; 2017 All Rights Reserved<br>
                        </div>



                        <div class="col-md-4 pull-right">
                                <i class="icon-envelope2" style="padding-right: 5px;"></i>info@leonartagency.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +48 500 525 291
                        </div>
                    </div>

                </div>


        </footer><!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
