
<?php 
/*
    Template Name: Home
*/

get_header(); ?>

<main class="template-home">
    <section class="hero-banner home-hero">
        <div class="container-narrow">
            <h1><?php the_title(); ?></h1>
            <?php if ( get_field('logo') ):
             $logoImage = get_field('logo');
                $logoImageUrl = $logoImage['url'];
                $logoImageAlt = $logoImage['alt'];
            ?>
            <img src="<?= $logoImageUrl; ?>" alt="<?= $logoImageAlt; ?>">
            <?php endif; ?>
            <?php if (get_field('sous_titre')): ?>
                <h3><?php the_field('sous_titre'); ?></h3>
            <?php endif; ?>
        </div>
    </section>
    <section class="text-content">
        <div class="container-narrow">
            <?php the_content(); ?>
        </div>
    </section>
    <?php
        $args = array(
        'post_type' => 'post'
        );

        $post_query = new WP_Query($args);
        if ( $post_query->have_posts() ) : ?>
        <section class="posts">
            <div class="container-narrow">
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <div class="post">
                        <div class="post__image">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="post__content">
                            <h2><?php the_title(); ?></h2>
                            <?= get_field('extrait'); ?>
                            <a href="<?php the_permalink() ?>">En savoir plus</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php wp_reset_postdata(  ); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>