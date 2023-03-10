<?php

require_once('lib/blocks.php');

/**
* Theme files
*/
function webpack_files() {
    wp_enqueue_script('webpack-js', get_theme_file_uri('assets/app.js'), array(), '1.0.1', true);
    wp_enqueue_script('splide-js', get_theme_file_uri('js/splide.min.js'), array(), '4.1.4', true);
    wp_enqueue_script('beerslider-js', get_theme_file_uri('js/BeerSlider.js'), array(), '1', true);
    wp_enqueue_style('webpack-styles', get_theme_file_uri('assets/style.css'), array(), '1.0.1');
    wp_enqueue_style('splide-css', get_theme_file_uri('css/splide.min.css'), array(), '4.1.4');
    wp_enqueue_style('beerslider-css', get_theme_file_uri('css/beerslider.css'), array(), '1');
    wp_localize_script( 'webpack-js', 'themeUrl',
    array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce( 'wp-smart-sign-nonce' ),
        'themeUrl' => get_theme_file_uri(),
        'loading' => __('Siunčiami duomenys...', 'core'),
        'success' => __('Jūsų užklausą gavome! Susisieksime su Jumis netrukus.', 'core'),
        'failure' => __('Kažkas negerai, prašome bandyti vėliau', 'core'),
        'name_empty' => __('Neužpildytas vardo laukelis', 'core'),
        'name_error' => __('Neteisingai užpildytas vardo laukelis', 'core'),
        'phone_empty' => __('Neužpildytas telefono laukelis', 'core'),
        'phone_error' => __('Neteisingai užpildytas telefono laukelis', 'core'),
        'mail_empty' => __('Neužpildytas el. pašto laukelis', 'core'),
        'mail_error' => __('Neteisingai užpildytas el. pašto laukelis', 'core'),
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



function theme_post_types() {

  register_post_type('faq', array(
    'rewrite' => array('slug' => _x( 'FAQ', 'slug' )),
    'has_archive' => false,
    'public' => true,
    'labels' => array(
        'name' => 'Frequenty asked questions',
        'add_new_item' => 'Add question & answer',
        'edit_item' => 'Edit question & answer',
        'all_items' => 'All question & answer',
        'singular_name' => 'FAQ'
    ),
    'supports' => array (
        'title',
        'page-attributes',

    ),
    'menu_icon' => 'dashicons-format-chat'
  ));

}

add_action('init', 'theme_post_types');
