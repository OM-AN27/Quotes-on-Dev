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
						<h1><?php
							$args = array( 'post_type' => 'post', 'orderby' => 'rand',
							'order'    => 'ASC',  'posts_per_page' => 1 );
							$posts = get_posts( $args ); // returns an array of posts
							// var_dump($posts);
							echo '<h1>' . $posts[0]->post_content .  ' </h1>';
						?>
			</h1>			

			<button class='main-button'>Show me another!</button>
			
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
