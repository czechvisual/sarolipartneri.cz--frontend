<?php

namespace developtheme\config\structure;

// Registers `book_genre` custom taxonomy

function register_book_genre_taxonomy()
{
    register_taxonomy('book_genre', 'book', [
        'rewrite' => [
            'slug' => 'books/genre',
            'with_front' => true,
            'hierarchical' => true,
        ],
        'hierarchical' => true,
        'public' => true,
        'labels' => [
            'name' => _x('Genres', 'taxonomy general name', app()['textdomain']),
            'singular_name' => _x('Genre', 'taxonomy singular name', app()['textdomain']),
            'search_items' => __('Search Genres', app()['textdomain']),
            'all_items' => __('All Genres', app()['textdomain']),
            'parent_item' => __('Parent Genre', app()['textdomain']),
            'parent_item_colon' => __('Parent Genre:', app()['textdomain']),
            'edit_item' => __('Edit Genre', app()['textdomain']),
            'update_item' => __('Update Genre', app()['textdomain']),
            'add_new_item' => __('Add New Genre', app()['textdomain']),
            'new_item_name' => __('New Genre Name', app()['textdomain']),
            'menu_name' => __('Genre', app()['textdomain']),
        ],
    ]);
}
add_action('init', __NAMESPACE__ . '\register_book_genre_taxonomy');
