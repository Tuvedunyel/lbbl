<?php get_header(); ?>

<main class="single-main">
    <section class="hero-banner">
        <div class="hero-banner-content">
            <div class="container-narrow">
                <h1><?php the_title(); ?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-solo-blanc.svg" alt="Logo du site, représentant une balance">
                <strong class="h3"><?php the_field('sous_titre'); ?></strong> 
            </div>
        </div>
    </section>
    <section class="single-content-container">
        <div class="container-narrow">
            <?php if (have_rows('competences')):
                while (have_rows('competences')): the_row(); ?>
                    <article>
                        <div class="single-img">
                            <?php $image = get_sub_field('image');
                            $url = $image['url'];
                            $alt = $image['alt'];
                            ?>
                            <img src="<?= esc_url($url); ?>" alt="<?= esc_attr($alt); ?>">
                        </div>
                        <div class="single-content">
                            <h2><?php the_sub_field('titre'); ?></h2>
                            <div class="single-text"><?php the_sub_field('texte'); ?></div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php get_template_part('layout/cabinet'); ?>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>