<?php
defined( 'ABSPATH' ) or die( 'Restricted access' );
/**
 * The Header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Shvaika
 * @since Shvaika 0.1
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-64x64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-128x128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-256x256.png" sizes="256x256">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/coast-228x228.png" sizes="228x228">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-128x128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/android-196x196.png" sizes="196x196">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-152x152.png">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <div class="header" id="header"><a href="<? echo esc_url( home_url( '/' ) ); ?>">Test Site</a></div>
        <div id="main" class="site-main">