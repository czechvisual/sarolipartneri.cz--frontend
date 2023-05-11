<i class="fa-solid fa-bars" id="openIcon" onclick="openMenu()"></i>
<i class="fa-solid fa-x" id="closeIcon" onclick="closeMenu()"></i>

<?php wp_nav_menu([
    'container'      => false,
    'depth'          => 4,
    'menu_class'     => 'app-nav',
    'items_wrap'     => '<ul class="%2$s">%3$s</ul>'
]); ?>
