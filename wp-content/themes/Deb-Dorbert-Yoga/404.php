<?php
/**
 * The template for displaying 404 pages (Not Found).
 * Custom 404 Page For Deb's Site
 *
 * @package Fluida
 */

get_header(); ?>

	<div id="container" class="<?php echo fluida_get_layout_class(); ?>">
		<main id="main" role="main" class="main">
			<?php cryout_before_content_hook(); ?>
			
			<header id="post-0" class="pad-container error404 not-found" <?php cryout_schema_microdata( 'element' ); ?>>
				<h1 class="entry-title" <?php cryout_schema_microdata( 'entry-title' ); ?>><?php _e( 'OOPS', 'fluida' ); ?></h1>
					<p <?php cryout_schema_microdata( 'text' ); ?>><?php _e( 'Apologies, but the page you requested could not be found. If there is something I can help you find directly, please contact me here:', 'fluida' ); ?></p>
			</header>

			<?php cryout_empty_page_hook(); ?>
			
			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php fluida_get_sidebar(); ?>
	</div><!-- #container -->

<?php get_footer(); ?>
