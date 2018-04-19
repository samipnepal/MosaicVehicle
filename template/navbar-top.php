<nav class="mosaicBlue" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo right">Mosaic Vehicle</a>
        <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'menu_id'        => 'top-menu',
            'menu_class'     => 'left hide-on-med-and-down'
        ) ); ?>

        <?php wp_nav_menu( array(
            'theme_location' => 'top-menu',
            'container' => false,
            'items_wrap' => '<ul class="sidenav">%3$s</ul>',
            'menu_id'        => 'nav-mobile',
            'menu_class'     => 'sidenav'
        )); ?>
        <a onclick="openSidenav()" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
