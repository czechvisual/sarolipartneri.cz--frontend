<?php

namespace developtheme\config\structure;

function register_navigation_areas()
{
    register_nav_menus([
        'primary' => __('Primary', app()['textdomain']),
    ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\register_navigation_areas');
