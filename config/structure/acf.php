<?php

namespace developtheme\config\structure;

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/config/acf/');
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/config/acf/');

// Include the ACF plugin.

include_once(MY_ACF_PATH . 'acf.php');

// Customize the url setting to fix incorrect asset URLs.

function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

add_filter('acf/settings/url', __NAMESPACE__ . '\my_acf_settings_url');

// (Optional) Hide the ACF admin menu item.

function my_acf_settings_show_admin( $show_admin ) {
    return true;
}

add_filter('acf/settings/show_admin', __NAMESPACE__ . '\my_acf_settings_show_admin');

// JSON

function my_acf_json_save_point($path) {
    $path = get_stylesheet_directory() . '/config/acf/json';

    return $path;
}

add_filter('acf/settings/save_json', __NAMESPACE__ . '\my_acf_json_save_point');

function my_acf_json_load_point($paths) {
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/config/acf/json';

    return $paths;
}

add_filter('acf/settings/load_json', __NAMESPACE__ . '\my_acf_json_load_point');
