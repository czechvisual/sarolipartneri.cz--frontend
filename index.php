<?php
get_header();

echo component('hero', 'carousel', [
    'title' => true,
    'description' => false
]);

echo component('about', 'default');

echo component('services', 'default');

get_footer();
