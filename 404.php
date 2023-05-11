<div class="app-error">
    <?=get_header()?>

    <div class="container">
        <div class="error-type">
            404
        </div>

        <h1>
            Tato stránka neexistuje
        </h1>

        <p class="font-size-p-large">
            Omlouváme se. Vypadá to, že tato stránka neexistuje nebo již byla smazána.
        </p>

        <?= component('button', 'default', [
            'label' => __('Vrátit se zpět'),
            'url' => __('javascript:history.go(-1)'),
            'color' => __('secondary')
        ]) ?>

        <?= component('button', 'default', [
            'label' => __('Na úvodní stranu'),
            'url' => __(get_home_url()),
            'color' => __('light')
        ]) ?>
    </div>

    <?=get_footer()?>
</div>
