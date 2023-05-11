<?php

namespace developtheme\config\structure;

// Custom Thumbnails Sizes

function add_image_sizes()
{
    add_image_size('custom-thumbnail', 800, 600, true);
}
add_action('after_setup_theme', __NAMESPACE__ . '\add_image_sizes');
