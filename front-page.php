<?php get_header(); ?>

    <main>
        <section class="front__hero-banner">
            <div class="container-narrow">
                <div class="modestie">
                    <span class="screen-reader-text">Modestie Corde, Avocate généraliste inscrite au barreau de Tours</span>
                </div>
                <div class="right__text">
                    <h1 class="front-page__h1"><?= get_field('titre_principal'); ?></h1>
                    <a href="#<?= get_field('ancre') ?>">Lire plus</a>
                </div>
            </div>
        </section>
        <section id="<?= get_field('ancre'); ?>">
            <div class="container-narrow">
                <h1><?php the_title(); ?></h1>
                <strong><?= get_field('sous-titre'); ?></strong>
                <div class="separator"></div>
                <?php the_content(); ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>