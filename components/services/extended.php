<div class="services-extended container-fluid p-0">
    <img src="<?= get_template_directory_uri() . '/assets/img/section-background/saroli_photo_03.webp' ?>" class="background" loading="lazy" alt="Poskytované služby" />

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="container">
            <div class="row gy-5">
                <div class="col-12 col-md-6">
                    <h2 class="wow slideInLeft" data-wow-duration="1s" data-wow-offset="10">
                        Komplexní finanční poradenství <span class="color-secondary-light">pro váš úspěch</span>
                    </h2>

                    <p class="mt-5 font-size-p-large line-height-medium">
                        Naše společnost se zaměřuje na poskytování kvalitního finančního poradenství, které vám pomůže dosáhnout vašich cílů a snů. Nabízíme širokou škálu služeb, které zahrnují investice, kryptoměny, pojištění, spoření a úvěry. Pracujeme s vámi na vytvoření individuálního plánu, který bude odpovídat vašim potřebám a možnostem.
                    </p>

                    <h4 class="mb-5">
                        Spolehně dosáhneme úspěchu!
                    </h4>

                    <?= component('button', 'default', [
                        'label' => __('Kontaktujte nás'),
                        'url' => __('#contact'),
                        'variant' => __(''),
                        'size' => __('medium'),
                        'color' => __('secondary'),
                    ]) ?>
                </div>

                <div class="col-12 col-md-6 px-5 text-center d-none d-md-block">
                    <img src="<?= get_template_directory_uri() . '/assets/img/illustration/illustration_02.svg' ?>" width="80%" loading="lazy" alt="" />
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</div>
