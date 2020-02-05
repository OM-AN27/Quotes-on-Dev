<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php 

        $smd = array('post_type' => 'post', 'numberposts' => '100');
        $whatever = get_posts($smd); ?>

        <?php foreach ( $whatever as $post ) : setup_postdata( $post ); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

 <?php endforeach; wp_reset_postdata(); ?>
        
    

       <?php  $categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
 
foreach ( $categories as $category ) {
    printf( '<a href="%1$s">%2$s</a><br />',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
    );
}
?>
<?php
$tags = get_tags($post->ID);  ?>
 
 
 
      <?php foreach($tags as $tag) :  ?>
 
    
        <a class="btn btn-warning"
            href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                  <?php print_r($tag->name); ?>
         </a>   
    
      <?php endforeach; ?>


            


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
