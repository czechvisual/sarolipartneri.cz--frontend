<div class="contact container">
    <div class="contact-cta">
        <h2 class="mb-5 font-size-d1 wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
            Jste připraveni finančně růst?
        </h2>

        <?= component('button', 'default', [
            'label' => __('Kontaktujte naše specialisty'),
            'url' => __('#contact'),
            'variant' => __(''),
            'size' => __('medium'),
            'color' => __('light'),
        ]) ?>
    </div>

    <div id="contact" class="container py-5">
        <div class="row">
            <div class="contact-form col-12 col-md-6">
                <h2>
                    Spojte se s námi
                </h2>

                <?=do_shortcode('[contact-form-7 id="188" title="Kontaktní formulář"]')?>
            </div>

            <div class="contact-image col-12 col-md-6">
                <img src="<?= get_template_directory_uri() . '/assets/img/section-background/saroli_photo_01.webp' ?>" loading="lazy" alt="Saroli" />
            </div>
        </div>
    </div>
</div>


