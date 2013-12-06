<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package onesie
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $options = get_option( gpp_get_current_theme_id() . '_options' ); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php if ( ! empty ( $options[ 'favicon' ] ) ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url( $options[ 'favicon' ] ); ?>" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header block" role="banner">
		<div class="site-branding">
			<?php if ( ! empty( $options['logo'] ) ) : ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img class="site-title" src="<?php echo esc_url( $options['logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>

			<h2 class="site-description">
			<?php if ( ! empty( $options['message'] ) ) : ?>
				<?php echo stripslashes_deep( $options['message'] ); ?>
			<?php else : ?>
				<?php bloginfo( 'description' ); ?>
			<?php endif; ?>
            </h2>
            <?php if ( ! empty( $options['button_link'] ) ) : ?>
				<a class="btn btn-big btn-translucent" href="<?php echo esc_url( $options['button_link'] ); ?>">
				<?php if ( ! empty( $options['button_text'] ) ) : ?>
					<?php echo esc_attr( $options['button_text'] ); ?>
				<?php else : ?>
					<?php _e( 'Learn More', 'onesie' ); ?>
				<?php endif; ?>
				</a>
			<?php endif; ?>
		</div>

		<?php if ( ! empty( $options['portfolio'] ) || ! empty( $options['about'] ) || ! empty( $options['contact'] ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<ul>
				<?php if ( ! empty( $options['portfolio'] ) ) { ?><li><a href="#portfolio"><?php _e( 'Portfolio', 'onesie' ); ?></a></li><?php } ?>
				<?php if ( ! empty( $options['about'] ) ) { ?><li><a href="#about"><?php _e( 'About', 'onesie' ); ?></a></li><?php } ?>
				<?php if ( ! empty( $options['contact'] ) ) { ?><li><a href="#contact"><?php _e( 'Contact', 'onesie' ); ?></a></li><?php } ?>
			</ul>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
