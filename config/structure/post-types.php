<?php

namespace developtheme\config\structure;

// Registers `carousel` custom post type

function register_carousel_post_type()
{
    register_post_type('carousel', [
        'description'            => __('List carousel slidů.', app()['textdomain']),
        'menu_icon'              => 'dashicons-cover-image',
        'public'                 => true,
        'show_ui'                => true,
        'show_in_menu'           => true,
        'show_in_rest'           => false,
        'supports'               => ['title', 'editor'],
        'taxonomies'             => [],
        'labels' => [
            'menu_name'          => __( 'Carousel', app()['textdomain'] ),
            'name'               => _x( 'Carousel', 'post type general name', app()['textdomain'] ),
            'singular_name'      => _x( 'Carousel', 'post type singular name', app()['textdomain'] ),
            'name_admin_bar'     => _x( 'Carousel', 'add new on admin bar', app()['textdomain'] ),
            'add_new'            => _x( 'Vytvořit nový', 'thing', app()['textdomain'] ),
            'add_new_item'       => __( 'Vytvořit nový Carousel', app()['textdomain'] ),
            'new_item'           => __( 'Nový', app()['textdomain'] ),
            'edit_item'          => __( 'Upravit', app()['textdomain'] ),
            'view_item'          => __( 'Zobrazit', app()['textdomain'] ),
            'all_items'          => __( 'Všechny', app()['textdomain'] ),
            'search_items'       => __( 'Vyhledat', app()['textdomain'] ),
            'parent_item_colon'  => __( 'Nadřazený:', app()['textdomain'] ),
            'not_found'          => __( 'Žádný hero nenalezen.', app()['textdomain'] ),
            'not_found_in_trash' => __( 'Žádný hero nebyl v koši nalezen.', app()['textdomain'] )
        ],
    ]);
}
add_action('init', __NAMESPACE__ . '\register_carousel_post_type');
