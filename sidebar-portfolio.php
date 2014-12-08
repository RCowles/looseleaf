<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Loose Leaf
 */

?>

<div id="secondary" class="widget-area portfolio-sidebar" role="complementary">

	<?php looseleaf_post_nav(); ?>

	<div class="entry-meta">
		<!--
		<h5><?php _e( 'Type:', 'looseleaf' ); ?></h5>
		<?php
			echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<ul class="portfolio-type-links"><li>', '</li><li>', '</li></ul>' );
		?>
		!-->
		<?php
			echo get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '<ul class="tags-links"><li>', '</li><li>', '</li></ul>' );
		?>

	</div><!-- .entry-meta !-->
</div><!-- #secondary -->
