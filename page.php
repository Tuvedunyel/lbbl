<?php get_header(); ?>

<main>
    <section class="hero-banner">
        <?php if ( get_field('background_image') ) : ?>
            <div class="parallax-background">
                <?php $background_image = get_field('background_image');
                    $background_image_url = $background_image['url'];
                    $background_image_alt = $background_image['alt'];    
                ?>
                <img src="<?= $background_image_url ?>" alt="<?= $background_image_alt ?>">
            </div>
        <?php endif; ?>
        <div class="hero-banner-content">
            <div class="container-narrow">
                <h1><?php the_title(); ?></h1>
                <strong class="h3"><?php the_field('sous_titre'); ?></strong> 
                
                <nav id="page-navigation">
                    <div id="separator"></div>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'page-menu',
                        'container' => '',
                        'menu_class' => 'page-navigation-list'
                    )); ?>
                </nav>
            </div>
        </div>
    </section>
    <article>
        <div class="container-narrow">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>