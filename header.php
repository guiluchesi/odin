<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php
		wp_head();
		$odin_main_configuration = get_option( 'main_configuration' );
		$logo_id = $odin_main_configuration['logo'];
		$get_url_logo = wp_get_attachment_image_src( $logo_id, 'full' );
	?>
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
</head>


<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">

 				<div class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
							<span class="sr-only">
								<?php _e( 'Toggle navigation', 'odin' ); ?>
							</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<h1 class="site-name">
								<?php bloginfo('name'); ?>
							</h1>
						</a>
					</div>

					<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
						<h2 class="titulo-nav">Menu de navegação</h2>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav navbar-nav',
									'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
									'walker'         => new Odin_Bootstrap_Nav_Walker()
								)
							);
						?>
					</nav><!-- .navbar-collapse -->
				</div><!-- #main-navigation-->

				<?php
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" />
					</a>
				<?php endif; ?>

		</div><!-- .container-->
	</header><!-- #header -->
