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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="welcome" class="block">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<a class="button" href="#">Take Action</a>
			</section>

			<section id="about" class="block">
				<h2 class="section-title">About</h2>
				<p></p>
			</section>

			<section id="portfolio" class="block">
				<h2 class="section-title">Portfolio</h2>
				<p></p>
			</section>

			<section id="contact" class="block">
				<h2 class="section-title">Contact</h2>
				<p></p>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
