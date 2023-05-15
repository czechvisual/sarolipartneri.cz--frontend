<div class="contact container">
    <div class="contact-cta">
        <h2 class="mb-5 wow slideInRight" data-wow-duration="1s" data-wow-offset="10">
            Vaše spokojenost je naší prioritou
        </h2>

        <?= component('button', 'default', [
            'label' => __('Kontaktujte naše specialisty'),
            'url' => __('#contact'),
            'variant' => __(''),
            'size' => __('medium'),
            'color' => __('light'),
        ]) ?>
    </div>

    <div class="container">
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


