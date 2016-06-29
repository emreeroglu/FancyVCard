<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(' | ', true, 'right'); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div id="dot-matrix"></div>
	<div class="spec">
		<header id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
			<div class="carousel-inner">
				<div class="item active">
					<div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/static/red.png');"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/static/green.png');"></div>
				</div>

				<div class="item">
					<div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/static/blue.png');"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/static/orange.png');"></div>
				</div>
			</div>
		</header>
	</div>
	<div class = "container">
		<div class = "container">

			<div class="navbar-header">	
				<h2><img class="img-responsive2" src="logo.address"> <?php bloginfo('name'); ?></h2>
			</div>
			<div class = "navbar-collapse">
				<?php
				wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             => 2,
					'menu_class'        => 'nav navbar-nav navbar-right',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
				);
				?>
			</div>
		</div>