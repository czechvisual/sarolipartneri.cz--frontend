<?php

namespace developtheme\config\structure;

// Registers the widget areas

function register_widget_areas()
{
    register_sidebar([
        'id' => 'sidebar',
        'name' => __('Sidebar', app()['textdomain']),
        'description' => __('Website sidebar', app()['textdomain']),
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
}
add_action('widgets_init', __NAMESPACE__ . '\register_widget_areas');
