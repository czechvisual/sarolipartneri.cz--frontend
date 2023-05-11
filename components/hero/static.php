<div class="hero hero-static">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <?php if (isset($title)) : ?>
                    <h1 class="font-size-d1 font-size-sm-d1 wow slideInLeft" data-wow-duration="1s" data-wow-offset="10">
                        <?= $title ?>
                    </h1>
                <?php endif; ?>

                <?php if (isset($description)) : ?>
                    <p>
                        <?= $description ?>
                    </p>
                <?php endif; ?>

                <?php if (isset($template_content)) : ?>
                    <?= $template_content ?>
                <?php endif; ?>

                <?= component('button', 'default', [
                    'label' => __('Zobrazit více'),
                    'url' => __('#'),
                    'variant' => __(''),
                    'size' => __('medium'),
                    'color' => __('secondary'),
                ]) ?>
            </div>
        </div>
    </div>
</div>
