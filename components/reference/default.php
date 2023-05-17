<div id="reference" class="reference container">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
                Vaše spokojenost je naší prioritou
            </h2>

            <p class="mt-5 font-size-p-large line-height-medium">
                Jsme hrdí na to, že mnoho našich klientů je s našimi službami nadmíru spokojených. Zde jsou některé z jejich zkušeností, které s vámi chtějí sdílet.
            </p>
        </div>
    </div>

    <?php
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'reference'
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>

        <div class="reference-carousel">

            <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div class="reference-item">
                    <p class="font-size-p-large">
                        <?= get_the_content() ?>
                    </p>

                    <h6 class="font-weight-bold">
                        <?= get_the_title() ?>
                    </h6>
                </div>

            <?php endwhile; ?>

        </div>

    <?php endif; ?>

</div>


