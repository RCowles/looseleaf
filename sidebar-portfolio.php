<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Loose Leaf
 */

?>

<div id="secondary" class="widget-area portfolio-sidebar" role="complementary">

	<div class="entry-meta">
		<div class="widget cat-links">
			<h3><?php _e( 'Type:', 'looseleaf' ); ?></h3>
			<?php
				echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<span class="dashicons dashicons-category"></span>', '<span class="dashicons dashicons-category"></span>', ' ' );
			?>
		</div><!-- .widget !-->

		<div class="widget tags-links">
			<h3><?php _e( 'Tags:', 'looseleaf' ); ?></h3>
			<?php
				echo get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '<span class="dashicons dashicons-tag"></span>', '<span class="dashicons dashicons-tag"></span>', ' ' );
			?>
		</div><!-- .widget !-->
	</div><!-- .entry-meta !-->

	<?php looseleaf_post_nav(); ?>

</div><!-- #secondary -->
