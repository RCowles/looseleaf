<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Loose Leaf
 */

?>

<div id="secondary" class="widget-area portfolio-sidebar" role="complementary">

	<div class="entry-meta">
		<div class="widget">
			<h3><?php _e( 'Type:', 'looseleaf' ); ?></h3>
			<?php
				echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<ul class="portfolio-type-links"><li>', '</li><li>', '</li></ul>' );
			?>
		</div><!-- .widget !-->

		<div class="widget">
			<h3><?php _e( 'Tags:', 'looseleaf' ); ?></h3>
			<?php
				echo get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '<ul class="tags-links"><li>', '</li><li>', '</li></ul>' );
			?>
		</div><!-- .widget !-->
	</div><!-- .entry-meta !-->

	<?php looseleaf_post_nav(); ?>

</div><!-- #secondary -->
