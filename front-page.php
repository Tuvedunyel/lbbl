<?php get_header(); ?>

    <main >
        <section class="front__hero-banner">
            <div class="front__hero__background"></div>
            <div class="container-narrow">
                <?php if ( have_rows('thematique') ): ?>
                    <ul class="thematique-list">
                        <?php while (have_rows('thematique')): the_row(); ?>
                            <li id="<?= get_sub_field('attribut'); ?>">
                                <button class="thematique-button">
                                    <?php $logo = get_sub_field('logo'); ?>
                                    <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                                    <strong><?php the_sub_field('theme'); ?></strong>
                                </button>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if(have_rows('detail_thematique')): ?>
                    <div class="detail-theme">
                        <?php while(have_rows('detail_thematique')): the_row(); ?>
                            <article class="detail-article">
                                <?php $image_theme = get_sub_field('image'); ?>
                                <img src="<?= $image_theme['url']; ?>" alt="<?= $image_theme['alt']; ?>">
                                <div>
                                    <h3><?php the_sub_field('titre') ?></h3>
                                    <?php the_sub_field('texte') ?>
                                </div>
                                <a href="<?php the_sub_field('lien') ?>">En savoir plus</a>
                            </article>
                        <?php endwhile; ?>
                </div>
                <?php endif; ?>
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

        <?php
            $args = array(
            'post_type' => 'post'
            );

        $post_query = new WP_Query($args);
        if ( $post_query->have_posts() ) : ?>
            <section class="posts">
                <div class="container-narrow">
                    <h2>Les compétences de notre cabinet d'avocats</h2>
                    <div class="posts__background-black">
                        <h4><?= get_field('slogan_post') ?></h4>
                    </div>
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                        <div class="post">
                            <div class="post__image">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="post__content">
                                <h3><?php the_title(); ?></h3>
                                <div class="separator"></div>
                                <?= get_field('extrait'); ?>
                                <a href="<?php the_permalink() ?>">Lire la suite</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
            <?php wp_reset_postdata(  ); ?>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>