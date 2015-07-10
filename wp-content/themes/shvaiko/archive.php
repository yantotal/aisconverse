<?php
defined( 'ABSPATH' ) or die( 'Restricted access' );
/**
 * The archive file
 *
 * Displays main template
 *
 * @package WordPress
 * @subpackage Shvaika
 * @since Shvaika 0.1
 */
get_header(); ?>
<div class="content">
    <?php single_cat_title( '', true ); ?>
    <?php
    if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) : the_post();

            /*
             * Include the post template
             */
            get_template_part( 'content', get_post_format() );

        endwhile;
        // Previous/next post navigation.
        ?>
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    <?php
    else :
        // If no content, include the "No posts found" template.
        get_template_part( 'content', 'none' );

    endif;
    ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>