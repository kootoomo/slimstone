<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content entry-article">
		<div class="row">
			<div class="col-lg-4">

			<div class="circle-feature">
				<div class="circle-feature-image"
					<?php 
						if ( has_post_thumbnail() ) { ?> 
							style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" 
						<?php }?>
				>
				</div>
			</div>

			</div>
			<div class="col-lg-8">
				<div class="title-holder">
					<div class="circle-holder">
						<div class="date"><?php echo get_the_date('d M'); ?></div>
						<div class="year"><?php echo get_the_date('Y'); ?></div>				
					</div>
					<?php
						the_title(
							sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
							'</a></h2>'
						);
					?>
				</div>		
				
				<?php the_excerpt(); ?>

			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<hr>
