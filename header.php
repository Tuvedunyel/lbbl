<!DOCTYPE html>
<html <?php language_attributes( ) ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
    <?php wp_body_open( ); ?>

    <header>
        <div class="container">
            <section class="header__image__container">
                <img src="" alt="">
            </section>
            <section class="header__menu__container">
                <nav class="header__menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class' => 'header__menu__list'
                        ) );
                    ?>
                </nav>
            </section>
        </div>
    </header>