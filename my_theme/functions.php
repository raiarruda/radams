<?php
add_theme_support('post-thumbnails');

function mytheme_register_nav_menu()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu do topo', 'text_domain'),

        )
    );
}

add_action('init', 'mytheme_register_nav_menu');


// meus post type

function meus_post_type(){
    register_post_type('imoveis',
    
        array(
            'labels' => array(
                'name' => __('Imóveis'),
                'singular_name'=>__('Imóvel')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-admin-multisite',   
            'show_in_rest' => true,         
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes')

        )
    );
}
add_action('init', 'meus_post_type');
