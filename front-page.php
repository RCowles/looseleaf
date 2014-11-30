<?php
/**
 * The template for displaying the front page.
 *
 * @package Loose Leaf
 */

get_header(); ?>

	<div id="frontpage-widgets">
		<?php dynamic_sidebar( 'frontpage-widgets' ); ?>
	</div><!-- #frontpage-widgets !-->

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
