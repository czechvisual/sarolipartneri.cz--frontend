<?php

namespace developtheme\config\setup;

add_filter( 'acdfevelop_pll_register_strings', function() {
    $strings = [
        // 'Key: String' => 'String',
    ];

    // foreach ( get_default_localization_strings() as $key => $value ) {
    // $strings[ "Accessibility: {$key}" ] = $value;
    // }

    return $strings;
} );

function get_default_localization_strings( $language = 'cs' ) {
    $strings = [
        'cs'  => [
            'Add a menu'                                   => __( 'Add a menu', app()['textdomain'] ),
            'Open main menu'                               => __( 'Open main menu', app()['textdomain'] ),
            'Close main menu'                              => __( 'Close main menu', app()['textdomain'] ),
            'Main navigation'                              => __( 'Main navigation', app()['textdomain'] ),
            'Back to top'                                  => __( 'Back to top', app()['textdomain'] ),
            'Open child menu'                              => __( 'Open child menu', app()['textdomain'] ),
            'Open child menu for'                          => __( 'Open child menu for', app()['textdomain'] ),
            'Close child menu'                             => __( 'Close child menu', app()['textdomain'] ),
            'Close child menu for'                         => __( 'Close child menu for', app()['textdomain'] ),
            'Skip to content'                              => __( 'Skip to content', app()['textdomain'] ),
            'Skip over the hero element'                   => __( 'Skip over the hero element', app()['textdomain'] ),
            'External site'                                => __( 'External site', app()['textdomain'] ),
            'opens in a new window'                        => __( 'opens in a new window', app()['textdomain'] ),
            'Page not found.'                              => __( 'Page not found.', app()['textdomain'] ),
            'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', app()['textdomain'] ),
            'Search'                                       => __( 'Search', app()['textdomain'] ),
            'Block missing required data'                  => __( 'Block missing required data', app()['textdomain'] ),
            'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', app()['textdomain'] ),
            'No results found for your search'             => __( 'No results found for your search', app()['textdomain'] ),
            'Edit'                                         => __( 'Edit', app()['textdomain'] ),
            'Previous slide'                               => __( 'Previous slide', app()['textdomain'] ),
            'Next slide'                                   => __( 'Next slide', app()['textdomain'] ),
            'Last slide'                                   => __( 'Last slide', app()['textdomain'] ),
            'Category'                                     => __( 'Kategorie', app()['textdomain'] ),
        ]
    ];

    return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['cs'];
}

function get_default_localization( $string ) {
    if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( __NAMESPACE__ . '\pll_register_strings', [] ) ) ) {
        return ask__( "Accessibility: {$string}" );
    }

    return esc_html( get_default_localization_translation( $string ) );
}

function get_default_localization_translation( $string ) {
    $language = get_bloginfo( 'language' );
    if ( function_exists( 'pll_the_languages' ) ) {
        $language = pll_current_language();
    }

    $translations = get_default_localization_strings( $language );

    return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
}
