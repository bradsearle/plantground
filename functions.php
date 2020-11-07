<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */



// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('html5blank', get_template_directory_uri() . 'assets/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}


/* Enqueues the child theme - Required for the child theme */
// add_action( 'wp_enqueue_scripts', 'tutsplus_parent_styles');
// function tutsplus_parent_styles() {
      
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
          
// }
 
/* Enqueues the external CSS file */
add_action( 'wp_enqueue_scripts', 'tutsplus_external_styles' );
function tutsplus_external_styles() {
 
    wp_register_style( 'widget-css', get_stylesheet_directory_uri().'/assets/css/styles.css' );
    wp_enqueue_style( 'widget-css' );
 
}