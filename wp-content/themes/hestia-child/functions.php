<?php

//Para agregar menus personalizados
function register_menus() {
    register_nav_menus([
        'menu_principal' =>('Main menu'),
        'menu_secundario' =>('Secondary menu'),
    ]);
}

add_action('init','register_menus');

// Para agregar librerias

function my_libraries() {
    wp_enqueue_style('slicknav_styles','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css', [], '1.0.0', true);
    wp_enqueue_script('slicknav_script','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js', [], '1.0.0', true);
    wp_enqueue_script('scripts', get_stylesheet_directory_uri().'/assets/js/scripts.js',['jquery','slicknav_script'], '1.0.0', true);
}

add_action('wp_enqueue_scripts','my_libraries');

//Para agregar post personalizados

function custom_3d_post() {
    register_post_type('3d-models',
        array('labels' => array(
            'name' => __('3D Models','hestia'),
            'singular_name' => __('3D Model','hestia'),
            'all_items' => __('All 3d models','hestia'),
            'add_new_item' => __('Add new 3d model','hestia'),
            'edit' => __('Edit','hestia'),
            'edit_item' => __('Edit 3d models','hestia'),
            'new_item' => __('New 3d model','hestia'),
            'view_item' => __('Watch 3d model','hestia'),
            'search_items' => __('Search 3d model','hestia'),
            'not_found' => __('Results not found','hestia'),
            'not_found_in_trash' => __('Results not found in trash','hestia'),
        ),// end of arrays
            'description' => __('This is a 3d model post type','hestia'),
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => false,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-smiley',
        
            'rewrite' => array('slug' => '3d-model', 'with_front' => false),
            'has_archive' => ('3d-model'),
            'capability_type' => ('post'),
            'hierarchical' => false,

            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
            )
    );
}

add_action('init','custom_3d_post');