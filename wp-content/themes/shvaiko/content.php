<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Shvaika
 * @since Shvaika 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php
        if ( is_single() ) :
            the_content();
        else :
            the_excerpt();
        endif;
        ?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php the_date(); ?>
        <?php
        if ( is_single() ) :
            the_category();
            the_tags();
        endif;
        ?>
		<?php edit_post_link( __( 'Edit', 'aisconverse' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
