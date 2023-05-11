
<div
    class="services-item wow slideInRight"
    style="background-color: <?= (isset($bg_color)) ? $bg_color : '' ?>; color: <?= (isset($text_color)) ? $text_color : '' ?>;"
    data-wow-duration="1s"
    data-wow-offset="10"
>
    <div class="row">
        <img src="<?= (isset($image)) ? $image : '' ?>" loading="lazy" alt="<?= (isset($title)) ? $title : '' ?>">

        <?php if (isset($title)) : ?>
            <h4>
                <?= $title ?>
            </h4>
        <?php endif; ?>

        <?php if (isset($description)) : ?>
            <p>
                <?= $description ?>
            </p>
        <?php endif; ?>

    </div>
</div>
