<?php get_header(); ?>

    <main >
        <section class="front__hero-banner">
            <div class="front__hero__background"></div>
            <div class="container-narrow">
                <?php if ( have_rows('thematique') ): ?>
                    <ul class="thematique-list">
                        <?php while (have_rows('thematique')): the_row(); ?>
                            <li>
                                <button class="thematique-button">
                                    <?php $logo = get_sub_field('logo'); ?>
                                    <div>
                                        <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                                    </div>
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
        <section class="front-page__title">
            <div class="container-narrow">
                <aside>
                    <?php the_content(); ?>
                </aside>
            </div>
        </section>
        <div id="front-post">
            <?php get_template_part('layout/cabinet'); ?>
            <?php
                $args = array(
                'post_type' => 'post'
                );
    
            $post_query = new WP_Query($args);
            if ( $post_query->have_posts() ) : ?>
                <section class="posts">
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="post">
                                <div class="post__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/front-blog.svg" alt="<?php the_title(); ?>">
                                </div>
                                <div class="post__content">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </section>
                <?php wp_reset_postdata(  ); ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>