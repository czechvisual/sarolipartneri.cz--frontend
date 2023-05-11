<div class="post-feature">
    <?php if ( has_post_thumbnail() ): ?>
        <img src="<?= wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) ?>" alt="">
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>
                    <?= the_title() ?>
                </h1>

                <div class="date">
                    <?= the_date() ?>
                </div>
            </div>
        </div>
    </div>
</div>
