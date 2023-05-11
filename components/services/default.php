<div id="services" class="services container-fluid">
    <div class="row">

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2 class="wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
                            Naše služby
                        </h2>
                    </div>

                    <div class="col-12 col-md-6">
                        <h5>
                            Prohlédněte si širokou nabídku našeho portfolia služeb, s kterými vám naši poradci a specialisté rádi pomůžou.
                        </h5>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">

                    <?php
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => -1,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);
                    $item_counter = 0;
                    $colors = array('#fff|#1a1a44', '#5b329a|#fff', '#997fc2|#fff');

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-12 col-md-4">
                                <?php
                                $color_string = $colors[$item_counter % 3];
                                list($bg_color, $text_color) = explode('|', $color_string);
                                ?>
                                <?= component('services', 'item', [
                                    'image' => __(get_the_post_thumbnail_url()),
                                    'title' => __(get_the_title()),
                                    'description' => __(get_the_content()),
                                    'bg_color' => __($bg_color),
                                    'text_color' => __($text_color),
                                ]) ?>
                            </div>
                            <?php
                            $item_counter++;
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>

        <?php endwhile; ?>
    </div>
</div>
