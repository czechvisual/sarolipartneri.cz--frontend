<article class="post-item">
    <?php if ( has_post_thumbnail() ): ?>
        <a href="<?php the_permalink(); ?>" class="image">
            <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>" alt="">
        </a>
    <?php endif; ?>

    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title(); ?></h3>
    </a>

    <div class="date">
        <?= the_date() ?>
    </div>

    <div>
        <?= the_excerpt() ?>
    </div>
</article>
