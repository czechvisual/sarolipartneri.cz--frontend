<section class="post-content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?= component('post/breadcrumb', 'default', [
                        'homeLabel' => __('Domů'),
                        'displayIcon' => __(true),
                        'icon' => __('fa-solid fa-house')
                    ]) ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>
                    <?= the_content() ?>
                </p>
            </div>
        </div>
    </div>
</section>


