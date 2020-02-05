<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="about-site-main" role="main" style="color: white; padding: 20px 10px 70px 10px;">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>


		<?php endwhile; // End of the loop. ?>
		<i class="fa fa-smile"></i>

         <p class='about-text'>This site is heavily inspired by Chris Coyler's <a href='https://quotesondesign.com/' target='_blank' class='quotes-link'><span class='quotes-on-design-site-link'>Quotes On Design</span></a>.</p>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
