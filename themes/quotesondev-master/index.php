<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class='quotes-container' >
		<i class="fa fa-quote-left font-awesome-quotes"></i>
						<h1><?php
							$args = array( 'post_type' => 'post', 'orderby' => 'rand',
							'order'    => 'ASC',  'posts_per_page' => 1 );
							$posts = get_posts( $args ); // returns an array of posts
							// var_dump($posts);
							echo '<h1 class="main-quote">' . $posts[0]->post_content .  ' </h1>';
							echo '<h2 class="author-main-quote">-- ' . $posts[0]->post_title .  ' </h2>';
						?>
			</h1>	
			<i class="fa fa-quote-right font-awesome-quotes"></i>		
		</section>

			<button class='main-button'>Show Me Another!</button>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
