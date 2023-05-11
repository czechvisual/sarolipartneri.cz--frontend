<?php

namespace developtheme\config\setup;

// Theme Actions

function example_action(){

}
add_filter('excerpt_length', __NAMESPACE__ . '\example_action');
