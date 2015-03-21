<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Loose Leaf
 */
?>

<div class="entry-content">
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'looseleaf' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'looseleaf' ),
			'after'  => '</div>',
		) );
	?>
</div><!-- .entry-content -->
