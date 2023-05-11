<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <?php if (isset($show_indicators)) : ?>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
        </div>

    <?php endif; ?>

    <div class="carousel-inner">
        <?php
            $c = 0;
            $args = array( 'post_type' => 'Carousel', 'posts_per_page' => 5 );
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
            $c++;
            $class = ($c == 1) ? 'active' : '';
        ?>
            <div class="hero carousel-item <?php echo $class; ?>">
                <?php
                $image = get_field('background_image');

                if( $image ):
                    $url = $image['url'];
                    $alt = $image['alt']; ?>

                    <img
                        src="<?php echo esc_url($url); ?>"
                        loading="lazy"
                        alt="<?php echo esc_attr($alt); ?>"
                    />
                <?php endif; ?>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <?php if (isset($title)) : ?>
                                <h1 class="wow slideInLeft" data-wow-duration="1s" data-wow-offset="10">
                                    <?= get_the_title() ?>
                                </h1>
                            <?php endif; ?>

                            <?php if (isset($description)) : ?>
                                <p>
                                    <?= get_the_content() ?>
                                </p>
                            <?php endif; ?>

                            <?php if (isset($template_content)) : ?>
                                <?= $template_content ?>
                            <?php endif; ?>

                            <?php
                            $link = get_field('button');

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? : '_self'; ?>

                                <?= component('button', 'default', [
                                    'label' => __(esc_html( $link_title )),
                                    'url' => __(esc_url( $link_url )),
                                    'target' => __(esc_attr( $link_target )),
                                    'variant' => __(''),
                                    'size' => __('medium'),
                                    'color' => __('secondary'),
                                ]) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <?php if (isset($show_arrows)) : ?>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Předchozí</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Následující</span>
        </button>

    <?php endif; ?>

</div>
