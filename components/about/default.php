<div id="about" class="about container">
    <div class="row">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="col">
                <?php
                $about = get_field('about_us'); ?>

                <h2 class="wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
                    <?=$about['title']?>
                </h2>

                <h5>
                    <?=$about['description']?>
                </h5>
            </div>

        <?php endwhile; ?>
    </div>
</div>
