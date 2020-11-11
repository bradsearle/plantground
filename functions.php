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


if ( ! function_exists( 'storefront_primary_navigation_wrapper' ) ) {
	/**
	 * The primary navigation wrapper
	 */
	function storefront_primary_navigation_wrapper() {
		echo '<div class=""><div class="">';
	}
}


function remove_default_hooks() {

    remove_action( 'storefront_header', 'storefront_header_container',                   0 );
    remove_action( 'storefront_header', 'storefront_header_container_close',                   0 );
    
    }
    
    add_action( 'init', 'remove_default_hooks' );