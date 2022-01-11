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
        <section id="<?= get_field('ancre'); ?>" class="front-page__title">
            <div class="container-narrow">
                <h1><?php the_title(); ?></h1>
                <h3><?= get_field('sous-titre'); ?></h3>
                <div class="separator"></div>
                <aside>
                    <?php the_content(); ?>
                </aside>
            </div>
        </section>

        <section class="primary-content">
            <?php if(have_rows('section')): ?>
                <?php while(have_rows('section')): the_row();
                    $couleur = get_sub_field('couleur')
                ?>
                    <article class="<?= $couleur == 'couleur' ? 'couleur' : 'blanc';  ?>">
                        <div class="container-narrow">
                            <div class="article__img-container">
                                <?php $image = get_sub_field('image');
                                    $image_url = $image['url'];
                                    $image_alt = $image['alt'];
                                ?>
                                <img src="<?= $image_url ?>" alt="<?= $image_alt; ?>">
                            </div>
                            <div class="article__text">
                                <h2><?= get_sub_field('titre'); ?></h2>
                                <?= get_sub_field('texte'); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </main>

<?php get_footer(); ?>