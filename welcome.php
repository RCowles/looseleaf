	<?php if ( is_front_page() ) {?>

	<div class="frontpage-header">
		<section id="welcome" class="wrapper" style="background:url('<?php if ( get_header_image() ) : header_image(); ?>') left center no-repeat; min-height:<?php echo esc_attr( get_custom_header()->height ); ?>px;">

			<?php endif; // End header image check. ?>

			<?php /*
			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="welcome-image">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			<?php endif; // End header image check. ?>
			*/ ?>

			<h1 class="welcome-message">
				Hello. I'm Ryan. I build websites with WordPress.
			</h1>

		 </section>
	 </div><!-- .frontpage-header !-->

	<?php } ?>