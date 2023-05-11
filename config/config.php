<?php

namespace developtheme\config;

// Setup

foreach (glob(get_theme_file_path( 'config/setup/*.php' )) as $filename) {
    require $filename;
}

// Structure

foreach (glob(get_theme_file_path( 'config/structure/*.php' )) as $filename) {
    require $filename;
}


