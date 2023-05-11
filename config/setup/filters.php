<?php

namespace developtheme\config\setup;

// Shortens posts excerpts to 60 words

function modify_excerpt_length()
{
    return 60;
}
add_filter('excerpt_length', __NAMESPACE__ . '\modify_excerpt_length');

// SVG upload

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', __NAMESPACE__ . '\add_file_types_to_uploads');

// Webp upload

function allow_webp_upload($mimes)
{
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('mime_types', __NAMESPACE__ . '\allow_webp_upload');

function webp_is_displayable($result, $path)
{
    if ($result === false) {
        $displayable_image_types = array(IMAGETYPE_WEBP);
        $info = @getimagesize($path);

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', __NAMESPACE__ . '\webp_is_displayable', 10, 2);

// Add active class to WP menu

function active_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , __NAMESPACE__ . '\active_nav_class' , 10 , 2);

// Allow native lazy loading on content img.

function native_lazy_loading($content)
{
    $content = str_replace('<img', '<img loading="lazy"', $content);
    return $content;
}
add_filter('the_content', __NAMESPACE__ . '\native_lazy_loading');

// Site URL shortcode -> [site_url]
add_action( 'init', function() {
    add_shortcode( 'site_url', function( $atts = null, $content = null ) {
        return site_url();
    } );
} );

// Disable Guttenberg editor

add_filter('use_block_editor_for_post', '__return_false', 10);
