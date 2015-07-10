<?php
/**
 * Theme functions
 *
 * @package WordPress
 * @subpackage Shvaika
 * @since Shvaika 0.1
 */
register_sidebar( array(
    'name'          => __( 'Widget Area', 'twentyfifteen' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

/**
 * Test Shortcode
 *
 * @since Shvaika 0.1
 *
 * @param Color
 * @return Html
 */
function ais_test_func(  $atts, $content = null ) {

    // Attributes
    extract( shortcode_atts(
            array(
                'color' => 'red',
            ), $atts, 'ais_test' )
    );
    if(!$atts["color"])
        $color = "red";
    else
        $color = $atts["color"];
    return '<font style="color:'.$color.'"">'.$content.'</font>';
}
add_shortcode( 'ais_test', 'ais_test_func' );