<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-auto-focus="false">
			<ul class="off-canvas-navigation">
	        	<?php display_simple_navigation('mobile-nav'); ?>
	        </ul>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<header class="header" role="banner">
				<div class="row">
					<div class="columns header-flex">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_image_directory(); ?>/logo.png" alt="" class="logo-img">
							</a>
						</div>
						<nav class="main-nav">
							<?php display_navigation('main-nav'); ?>
						</nav>
					</div>
				</div>
			</header>
