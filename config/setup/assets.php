<?php

namespace developtheme\config\setup;

// Registers theme stylesheet files

function register_stylesheets() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    wp_enqueue_style('cookie-consent', 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.6/dist/cookieconsent.css');
    wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css');
    wp_enqueue_style('owl-carousel-min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('wow-animate', 'https://res.cloudinary.com/patrik-vadura/raw/upload/v1681991005/animate_evdwgt.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/public/assets/css/app.css');
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\register_stylesheets');

// Registers theme script files

function register_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/c15086c90a.js');
    wp_enqueue_script('cookie-consent', 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.6/dist/cookieconsent.js', array(), false, true);
    wp_enqueue_script('cookie-consent-init', get_template_directory_uri() . '/public/assets/js/modules/cookieconsent-init.js', array(), false, true);
    wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('wow-min', get_template_directory_uri() . '/public/assets/js/modules/wow.min.js', array(), false, true);
    wp_enqueue_script('wow-init', get_template_directory_uri() . '/public/assets/js/modules/wow-init.js', array(), false, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/public/assets/js/app.js', array(), false, true);
}

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\register_scripts');

// Register admin files

function register_admin() {
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/public/assets/css/admin.css');
    wp_enqueue_script('admin-scripts', get_template_directory_uri() . '/public/assets/js/admin.js', array(), false, true);
}

add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\register_admin' );

// Moves front-end jQuery script to the footer

function move_jquery_to_the_footer($wp_scripts) {
    if (! is_admin()) {
        $wp_scripts->add_data('jquery', 'group', 1);
        $wp_scripts->add_data('jquery-core', 'group', 1);
        $wp_scripts->add_data('jquery-migrate', 'group', 1);
    }
}

add_action('wp_default_scripts', __NAMESPACE__ . '\move_jquery_to_the_footer');
