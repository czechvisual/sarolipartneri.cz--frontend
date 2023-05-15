<?php

namespace developtheme\config\structure;

function reference_carousel_init() {
    $script = "
    jQuery(document).ready(function(){
        jQuery('.reference-carousel').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            arrows: true,
            responsive: [
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    });
    ";
    wp_add_inline_script('slick-script', $script, 'after');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\reference_carousel_init');

