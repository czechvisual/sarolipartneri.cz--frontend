<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'no-js' ); ?>>
<main id="app" class="app">

    <header id="app-header" class="app-header">
        <div class="container inner">

            <div class="app-brand">
                <a href="<?= get_home_url() ?>" rel="home">
                    <span class="screen-reader-text"><?= bloginfo( 'name' ) ?></span>
                    <?php include get_theme_file_path( app()['info']['logo'] );?>
                </a>
            </div>

            <?= component('header/navigation', 'default') ?>
        </div>
    </header>
