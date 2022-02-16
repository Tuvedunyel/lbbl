<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo du site">
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
                            </div><ul id="menu-main-menu" class="%2$s" >%3$s</ul>',
                        ) );
                    ?>
                </nav>
            </section>
            <section class="header__social_nav">
                 <?php if (have_rows('socials', 'options')): ?>
                <div class="socials-container">

                    <?php while (have_rows('socials', 'options')): the_row(); ?>
                    <?php 
                    $link = get_sub_field('lien_socials', 'options');

                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a href="<?= $link_url; ?>" title="<?= $link_title; ?>" target="<?= $link_target; ?>">
                        <?php $image = get_sub_field('image_socials', 'options');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        ?>
                        <img src="<?= esc_url($url); ?>" alt="<?= esc_attr($alt); ?>">
                    </a>
                    <?php endwhile ?>
                </div>
                <?php endif ?>
            </section>
        </div>
    </header>