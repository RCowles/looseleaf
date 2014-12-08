<?php
/**
 * @package Loose Leaf
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php
				echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<div class="entry-meta"><span class="portfolio-type-links">', _x(', ', 'Used between list items, there is a space after the comma.', 'looseleaf' ), '</span></div>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'looseleaf' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php looseleaf_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
