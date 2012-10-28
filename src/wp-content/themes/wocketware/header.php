<!doctype html>

<!--[if IEMobile 7]><html <?php language_attributes(); ?> class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><html <?php language_attributes(); ?> class="no-js"><![endif]-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 oldie"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><html <?php language_attributes(); ?> class="no-js"><![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<!-- for third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" 
			  href="<?php echo get_images_dir() . "/apple-touch-icon-144x144-precomposed.png" ?>">

		<!-- for iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" 
			  href="<?php echo get_images_dir() . "apple-touch-icon-114x114-precomposed.png" ?>">

		<!-- for first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" 
			  href="<?php echo get_images_dir() . "apple-touch-icon-72x72-precomposed.png" ?>">

		<!-- for non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" 
			  href="<?php echo get_images_dir() . "apple-touch-icon-precomposed.png" ?>">

		<!-- for everyone else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<div id="top-border">&nbsp;</div>

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div id="post-nav" class="clearfix"></div>

				</div>

			</header>
