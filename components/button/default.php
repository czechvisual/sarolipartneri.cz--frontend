<?php

// Setting
$tag = isset($button) ? 'button' : 'a';
$href = !isset($button) && isset($url) ? 'href="' . $url . '"' : '';
$target = !isset($button) && isset($target) ? 'target="' . $target . '"' : '';

// Variant, style
$class = 'button'
    . (isset($variant) ? ' button-' . $variant : '')
    . (isset($size) ? ' button-' . $size : '')
    . (isset($color) ? ' button-' . $color : '');
$selector = isset($selector) ? $selector : '';
$icon = isset($icon) ? '<i class="' . $icon . '"></i>' : '';
$label = isset($label) ? $label : ''; ?>

<<?= $tag ?> <?= $href ?> class="<?= $class ?>" <?= $target ?> <?= $selector ?>>
    <?= $icon . $label ?>
</<?= $tag ?>>
