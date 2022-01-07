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
            <?php if (have_rows('liste')) : ?>
                <div class="zone-ancre">
                    <?php while (have_rows('liste')) : the_row(); ?>
                        <section id="<?= get_sub_field('ancre'); ?>">
                        <div class="image-container">
                            <?php $image = get_sub_field('image'); 
                                $image_url = $image['url'];
                                $image_alt = $image['alt'];
                            ?>
                            <img src="<?= $image_url; ?>" alt="<?= $image_alt; ?>">
                        </div>    
                            <div class="list-content">
                                <h2><?php the_sub_field('titre'); ?></h2>
                                <?php the_sub_field('contenu'); ?>
                            </div>
                        </section>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>