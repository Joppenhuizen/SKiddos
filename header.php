<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="nav-bar-container">
	<nav class="navbar header" role="navigation">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-12">
					<div class="logo">
					<a href="<?php echo get_home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'option'), 'full' ); ?></a>
					</div>
					<div class="mobile-btn">
						<div></div>
					</div>
					<div class="nav-top desktop d-none d-md-inline-block">
						<?php wp_nav_menu( array(
									'theme_location'  => 'menu-top',
									'container'       => 'div',
									'menu_class'      => 'navbar-nav flex-row',
						) ); ?>
					</div>
					<div class="nav-top mobile d-md-none">
						<?php wp_nav_menu( array(
									'theme_location'  => 'menu-top',
									'container'       => 'div',
									'menu_class'      => 'navbar-nav',
						) ); ?>
						<div class="mobile-btn close">
							<div></div>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</nav>
</div>
<div class="scrolltop dashicons dashicons-arrow-up-alt2"></div>
		




