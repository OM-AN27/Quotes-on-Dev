<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="submit-site-main" role="main">

        <?php  if ( is_user_logged_in() ):?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<?php endif;?>
			<?php  if ( !is_user_logged_in() ):?>
					<h1 class='not-logged-title'>Submit a Quote</h1>
					<p class='not-logged-text'>	Sorry, you must be logged in to submit a quote!</p>
					<a class='login'>Click here to log in</a>
			<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
