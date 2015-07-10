<?php
defined( 'ABSPATH' ) or die( 'Restricted access' );
/**
 * The single post template file
 *
 * Displays main template
 *
 * @package WordPress
 * @subpackage Shvaika
 * @since Shvaika 0.1
 */
get_header(); ?>
<div class="content">
<?php
if ( have_posts() ) :
    // Start the Loop.
    while ( have_posts() ) : the_post();

        /*
         * Include the post template
         */
        get_template_part( 'content', get_post_format() );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    endwhile;
    // Previous/next post navigation.
else :
    // If no content, include the "No posts found" template.
    get_template_part( 'content', 'none' );

endif;
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>