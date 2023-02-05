<?php

require_once('lib/blocks.php');

/**
* Theme files
*/
function webpack_files() {
    wp_enqueue_script('webpack-js', get_theme_file_uri('assets/app.js'), array(), '1.0.1', true);
    wp_enqueue_style('webpack-styles', get_theme_file_uri('assets/style.css'), array(), '1.0.1');
    wp_localize_script( 'webpack-js', 'themeUrl',
        array(
            'themeUrl' => get_theme_file_uri()
        )
    );
}
add_action('wp_enqueue_scripts', 'webpack_files');


/**
 * Theme support
 */
function theme_features() {
    load_theme_textdomain( 'expertmedia', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
}

add_action('after_setup_theme', 'theme_features');

function wpcontent_svg_mime_type( $mimes = array() ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );  

  //load menu
add_theme_support( 'menus' );

function custom_new_menu() {
	register_nav_menus(
    array(
      'header-menu' => __( 'Header menu' ),
      'footer-menu-2' => __( 'Footer menu 2')

    ) 
  );
}

add_action( 'init', 'custom_new_menu' );



