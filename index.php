<?php
get_header();

echo component('hero', 'carousel', [
    'title' => true,
    'description' => false
]);

echo component('about', 'default');

echo component('services', 'default');

echo component('features', 'default');

echo component('services', 'extended');

echo component('reference', 'default');

echo component('contact', 'default');

get_footer();
