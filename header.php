<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/styles.css" type="text/css" media="screen" /> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="plantground__bas">



<?php wp_body_open(); ?>


	