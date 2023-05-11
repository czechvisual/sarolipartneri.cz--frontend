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

// Registers `service` custom post type
function register_service_post_type()
{
    register_post_type('service', [
        'description'            => __('List služeb.', app()['textdomain']),
        'menu_icon'              => 'dashicons-cloud',
        'public'                 => true,
        'show_ui'                => true,
        'show_in_menu'           => true,
        'show_in_rest'           => false,
        'supports'               => ['title', 'editor', 'thumbnail'],
        'taxonomies'             => [],
        'labels' => [
            'menu_name'          => __( 'Služby', app()['textdomain'] ),
            'name'               => _x( 'Služba', 'post type general name', app()['textdomain'] ),
            'singular_name'      => _x( 'Služby', 'post type singular name', app()['textdomain'] ),
            'name_admin_bar'     => _x( 'Služby', 'add new on admin bar', app()['textdomain'] ),
            'add_new'            => _x( 'Vytvořit novou', 'thing', app()['textdomain'] ),
            'add_new_item'       => __( 'Vytvořit novou službu', app()['textdomain'] ),
            'new_item'           => __( 'Nová', app()['textdomain'] ),
            'edit_item'          => __( 'Upravit', app()['textdomain'] ),
            'view_item'          => __( 'Zobrazit', app()['textdomain'] ),
            'all_items'          => __( 'Všechny', app()['textdomain'] ),
            'search_items'       => __( 'Vyhledat', app()['textdomain'] ),
            'parent_item_colon'  => __( 'Nadřazené:', app()['textdomain'] ),
            'not_found'          => __( 'Žádné služby nenalezeny.', app()['textdomain'] ),
            'not_found_in_trash' => __( 'Žádné služby nebyly v koši nalezeny.', app()['textdomain'] )
        ],
    ]);
}
add_action('init', __NAMESPACE__ . '\register_service_post_type');

// Registers `reference` custom post type
function register_reference_post_type()
{
    register_post_type('reference', [
        'description'            => __('List referencí.', app()['textdomain']),
        'menu_icon'              => 'dashicons-format-quote',
        'public'                 => true,
        'show_ui'                => true,
        'show_in_menu'           => true,
        'show_in_rest'           => false,
        'supports'               => ['title', 'editor'],
        'taxonomies'             => [],
        'labels' => [
            'menu_name'          => __( 'Reference', app()['textdomain'] ),
            'name'               => _x( 'Reference', 'post type general name', app()['textdomain'] ),
            'singular_name'      => _x( 'Reference', 'post type singular name', app()['textdomain'] ),
            'name_admin_bar'     => _x( 'Reference', 'add new on admin bar', app()['textdomain'] ),
            'add_new'            => _x( 'Vytvořit novou', 'thing', app()['textdomain'] ),
            'add_new_item'       => __( 'Vytvořit novou referenci', app()['textdomain'] ),
            'new_item'           => __( 'Nová', app()['textdomain'] ),
            'edit_item'          => __( 'Upravit', app()['textdomain'] ),
            'view_item'          => __( 'Zobrazit', app()['textdomain'] ),
            'all_items'          => __( 'Všechny', app()['textdomain'] ),
            'search_items'       => __( 'Vyhledat', app()['textdomain'] ),
            'parent_item_colon'  => __( 'Nadřazené:', app()['textdomain'] ),
            'not_found'          => __( 'Žádná reference nenalezena.', app()['textdomain'] ),
            'not_found_in_trash' => __( 'Žádný reference nebyla v koši nalezena.', app()['textdomain'] )
        ],
    ]);
}
add_action('init', __NAMESPACE__ . '\register_reference_post_type');
