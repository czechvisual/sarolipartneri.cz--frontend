<?php get_header(); ?>

<div class="app-post">

    <?php
        if (have_posts()) :
        while (have_posts()) : the_post() ?>

            <?= component('post/content/feature', 'default') ?>

            <?= component('post/content', 'default') ?>

        <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
