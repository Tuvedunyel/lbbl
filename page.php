<?php get_header(); ?>

<main>
    <section class="hero-banner">
        <div class="parallax-background">
            <?php $background_image = get_field('background_image');
                $background_image_url = $background_image['url'];
                $background_image_alt = $background_image['alt'];    
            ?>
            <img src="<?= $background_image_url ?>" alt="<?= $background_image_alt ?>">
        </div>
        <div class="hero-banner-content">
            <h1><?php the_title(); ?></h1>
            <strong class="h3">Avocat en droit pénal des des auteurs et des victimes à Tours</strong> 
            
            <nav id="page-navigation">
                <?php wp_nav_menu( array(
                    'theme_location' => 'page-menu',
                    'container' => '',
                    'menu_class' => 'page-navigation-list'
                )); ?>
            </nav>
        </div>
    </section>
</main>

<?php get_footer(); ?>