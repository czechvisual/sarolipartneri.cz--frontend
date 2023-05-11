<?php

function component($component_name, $component_variant, $variables = [], $content_callback = null) {
    extract($variables);
    ob_start();

    if ($content_callback !== null) {
        $template_content = $content_callback();
    }

    $path = 'components' . '/' . $component_name . '/' . $component_variant;
    include(locate_template($path . '.php'));
    return ob_get_clean();
}

function partials( $partials_name ) {
    ob_start();
    $path = 'partials' . '/' . $partials_name;
    include(locate_template($path . '.php'));
    return ob_get_clean();
}


