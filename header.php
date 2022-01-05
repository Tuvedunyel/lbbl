<!DOCTYPE html>
<html <?php language_attributes( ) ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
    <?php wp_body_open( ); ?>
    <header>
        <div class="container">
            <section class="header__image__container">
                <a href="<?php echo home_url(  ) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>./img/logo.png" alt="logo du site">
                </a>
            </section>
            <section class="header__menu__container">
                <nav class="header__menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class' => 'header__menu__list',
                             'fallback_cb' => false,
                            'items_wrap' => '<div class="menu-btn">
                                <div class="menu-btn__burger">
                                </div>
                            </div><ul id="%1$s" class="%2$s" hidden>%3$s</ul>',
                        ) );
                    ?>
                </nav>
            </section>
        </div>
    </header>