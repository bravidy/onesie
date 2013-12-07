<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package onesie
 */

get_header();
$options = get_option( gpp_get_current_theme_id() . '_options' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$portfolios = $options['portfolio'];
		if ( ! empty( $portfolios ) ) :
		$images = explode( ',', $portfolios );
		?>
			<section id="portfolio" class="block">
				<h2 class="section-title"><?php _e( 'Portfolio', 'onesie' ); ?></h2>

				<ul class="gallery">

				<?php 
					foreach( $images as $id ) {

						$attachment_caption = get_post_field( 'post_excerpt', $id );
						$attachment_title = get_post_field( 'post_title', $id );
						$attachment_link = get_post_meta( $id, '_gpp_custom_url', true );
						$attachment_attributes = wp_get_attachment_image_src( $id, 'large' );
				?>
					<li>
						<figure>
							<a href="<?php echo $attachment_attributes[0] ?>"<?php if ( ! empty( $attachment_title ) ) { ?> title="<?php echo $attachment_title; ?><?php if ( ! empty( $attachment_caption ) ) { ?> <small><?php echo $attachment_caption; ?></small><?php } ?><?php if ( ! empty( $attachment_link ) ) { ?> <small><?php echo esc_url( $attachment_link ); ?></small><?php } ?>"<?php } ?> class="gallery-item">
								<?php echo wp_get_attachment_image( $id, "large" ); ?>
							</a>
							<figcaption>
								<?php if ( ! empty( $attachment_title ) ) { ?><h3><?php echo $attachment_title; ?></h3><?php } ?>
								<?php if ( ! empty( $attachment_caption ) ) { ?><span><?php echo $attachment_caption; ?></span><?php } ?>
								<?php if ( ! empty( $attachment_link ) ) { ?><a href="<?php echo esc_url( $attachment_link ); ?>" title="<?php echo $attachment_title; ?>"><span class="genericon genericon-external"></span></a><?php } ?>
							</figcaption>
						</figure>
					</li>
				<?php } ?>

			</section>
		<?php endif; ?>

		<?php if ( ! empty( $options['about'] ) ) : ?>
			<section id="about" class="block">
				<h2 class="section-title"><?php _e( 'About', 'onesie' ); ?></h2>
					<p class="lead"><?php echo stripslashes_deep( $options['about'] ); ?></p>
			</section>
		<?php endif; ?>
		
		<?php if ( ! empty( $options['contact'] ) ) : ?>
			<section id="contact" class="block">
				<h2 class="section-title"><?php _e( 'Contact', 'onesie' ); ?></h2>
					<p class="lead"><?php echo stripslashes_deep( $options['contact'] ); ?></p>
			</section>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
