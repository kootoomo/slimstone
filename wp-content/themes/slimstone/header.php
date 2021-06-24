<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">

			<div class="container">

				<div class="header-tablet-holder">					
					<div class="top-header-social-media">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</div>

					<div class="header-mobile-contact-phone">
						<a href="#"><i class="fa fa-phone"></i>08 9000 0000</a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						MENU <i class="fa fa-bars"></i>
					</button>

				</div>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

				<div class="header-desktop-view">
					<div class="top-header-social-media">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</div>
				</div>

			</div><!-- .container -->
			

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->


<div class="header-with-logo">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 col-sm-6 col-8">
				<a href="/" class="header-logo-link">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo Slimstone">
				</a>				
			</div>
			<div class="col-lg-6 header-middle">
				<a href="#" class="header-contact-us">
				<i class="fa fa-phone"></i> Call us today 08 9000 0000
				</a>
				<div class="header-buttons">
					<a href="#" class="header-button">
						Visit our showroom <i class="fa fa-chevron-right"></i>
					</a>
					<a href="#" class="header-button alt">
						Get a free quote today <i class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 header-sponsor-holder">
				<div class="header-sponsor-title">
					In association with
				</div>
				<div class="header-sponsor-image">
					<a href="/" class="header-logo-link">
						<img src="<?php echo get_template_directory_uri(); ?>/img/sponsor-granite.svg" alt="Sponsor Granite">
					</a>
				</div>
			</div>
			<div class="col-4">
				<button class="mobile-navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<i class="fa fa-bars"></i> MENU
				</button>
			</div>
		</div>
	</div>
</div>
