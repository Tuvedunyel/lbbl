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
            <div class="content-wrapper">
                <?php the_content(); ?>
            </div>
        </div>
        <?php $type_page = get_field('page_simple_ou_complexe');
        if ($type_page == 'complexe') : ?>
        <div class="container-narrow page-complexe">
            <section class="left-column">
                <?php if(have_rows('colonne_de_gauche')): ?>
                    <?php while(have_rows('colonne_de_gauche')) : the_row(); ?>
                    <?php $couleur = get_sub_field('couleur_ou_blanc'); ?>
                        <div id="<?= get_sub_field('ancre'); ?>" class="<?= $couleur ?>">
                            <?php $image_left = get_sub_field('image'); 
                                $image_left_url = $image_left['url'];
                                $image_left_alt = $image_left['alt'];
                            ?>
                            <div class="image-container">
                                <img src="<?= $image_left_url; ?>" alt="<?= $image_left_alt; ?>">
                            </div>
                            <div class="list-content">
                                <h2><?php the_sub_field('titre'); ?></h2>
                                <?php the_sub_field('texte'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
            <section class="middle-column">
                <?php if(have_rows('colonne_du_milieu')): ?>
                    <?php while(have_rows('colonne_du_milieu')) : the_row(); ?>
                    <?php $couleur = get_sub_field('couleur_ou_blanc'); ?>
                        <div id="<?= get_sub_field('ancre'); ?>" class="<?= $couleur ?>">
                            <?php $image_middle = get_sub_field('image'); 
                                $image_middle_url = $image_middle['url'];
                                $image_middle_alt = $image_middle['alt'];
                            ?>
                            <div class="image-container">
                                <img src="<?= $image_middle_url; ?>" alt="<?= $image_middle_alt; ?>">
                            </div>
                            <div class="list-content">
                                <h2><?php the_sub_field('titre'); ?></h2>
                                <?php the_sub_field('texte'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
            <section class="right-column">
                <?php if(have_rows('colonne_de_droite')): ?>
                    <?php while(have_rows('colonne_de_droite')) : the_row(); ?>
                    <?php $couleur = get_sub_field('couleur_ou_blanc'); ?>
                        <div id="<?= get_sub_field('ancre'); ?>" class="<?= $couleur ?>">
                            <?php $image = get_sub_field('image');
                                $image_url = $image['url'];
                                $image_alt = $image['alt'];
                            ?>
                            <div class="image-container">
                                <img src="<?= $image_url; ?>" alt="<?= $image_alt; ?>">
                            </div>
                            <div class="list-content">
                                <h2><?php the_sub_field('titre'); ?></h2>
                                <?php the_sub_field('texte'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </div>

        <?php else : ?>
            <?php if (have_rows('liste')) : ?>
                <div class="zone-ancre">
                    <div class="container-narrow">
                        <div class="top-left-border"></div>
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
                        <div class="bottom-right-border"></div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </article>
</main>

<?php get_footer(); ?>