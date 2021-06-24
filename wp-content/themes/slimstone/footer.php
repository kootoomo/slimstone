<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<div class="container">
	<div class="info-holder">
		<h2>How can we help?</h2>
		<div class="quote">If you'd like more information about our products or services simply fill in the form below and a Slimstone Representative will be in touch as soon as possible.</div>
	
		<div class="contact-form-holder">
			<div class="row">
				<div class="col-lg-6">
					<input type="text" placeholder="Name">
					<input type="text" placeholder="Email Address">
					<input type="text" placeholder="Phone Number">
				</div>
				<div class="col-lg-6">
					<textarea placeholder="Message"></textarea>
					<!-- <input type="submit" value="Submit"> -->
					<a href="#" class="footer-submit-button">
						Submit <i class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>

			<div class="copyright"><i class="fa fa-copyright"></i> Copyright 2021 Slimstone Systems in association with Granite Transformation</div>
			<div class="moshi">Website by Moshi Moshi</div>

		</div>
	</div>
</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
