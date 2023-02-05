<?php

/**
 * Theme blocks
 */
global $blocks;

$blocks = array(
    'main-hero' => 'Main Hero',
);
add_action('acf/init', 'theme_acf_blocks_init');
function theme_acf_blocks_init() {

    if( function_exists('acf_register_block') ) {

        global $blocks;
        foreach ($blocks as $key => $value) {
            acf_register_block(array(
                'name'				=> $key,
                'title'				=> $value,
                'render_callback'	=> 'pp_blocks',
                'category'			=> 'landing-blocks',
                'icon' => array(
                    'background' => '#fdf8f8',
                    'foreground' => '#484848',
                    'src' => 'image-filter',
                ),
                'mode'              => 'edit',
                'supports' => array(
                    'align' => false,
                    'mode' => false,
                ),
                'example' => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => ['is_preview' => true],
                    ]
                ]
            ));
        }
    }
}
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_filter( 'allowed_block_types_all', 'pp_allowed_block_types', 10,2 );

function pp_allowed_block_types( $allowed_blocks, $post ) {
    global $pagenow;
    global $post;

    if ( !empty( $post->post ) ) {

        $allowed_blocks = ['core/block',
            'core/html',
            'core/image',
            'core/quote',
            'core/paragraph',
            'core/heading',
            'core/list'];

        if ($post->post_type == 'page') {
            foreach ($blocks as $key => $value) {
                $allowed_blocks[] = 'acf/'.$key;
            }
        }
    }

    return $allowed_blocks;
}


$block_ind = 0;
global $block_ind;

function pp_blocks( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if (get_field('is_preview')) {
        echo '<img src="'.get_theme_file_uri("blocks/preview/".$slug.".jpg").'" alt="">';
    } else {
        global $block_index;
        $block_index++;
        if( file_exists( get_theme_file_path("blocks/{$slug}.php") ) ) {
            include( get_theme_file_path("blocks/{$slug}.php") );
        }
    };
}

if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Header settings',
        'menu_title'	=> 'Header settings',
        'menu_slug' 	=> 'header-settings',
        'capability'	=> 'edit_posts',
        'post_id'       =>  'header-settings',
        'redirect'		=> false
    ));

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Theme settings',
        'menu_title'	=> 'Theme settings',
        'menu_slug' 	=> 'theme-settings',
        'capability'	=> 'edit_posts',
        'post_id'       =>  'theme-settings',
        'redirect'		=> false
    ));

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Footer settings',
        'menu_title'	=> 'Footer settings',
        'menu_slug' 	=> 'footer-settings',
        'capability'	=> 'edit_posts',
        'post_id'       =>  'footer-settings',
        'redirect'		=> false
    ));


}

