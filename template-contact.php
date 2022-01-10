<?php
/*

    Template Name: Contact

*/
get_header(); ?>

<main>
    <div class="hero-banner">
        <?php 
            if (get_field('hero_image')):
                $hero_image = get_field('hero_image');
                $hero_image_url = $hero_image['url'];
                $hero_image_alt = $hero_image['alt']; ?>
                <img src="<?= $hero_image_url ?>" alt="<?= $hero_image_alt ?>">
            <?php endif; ?>
    </div>
    <section id="contact">
        <div class="container-narrow">
            <h1><?php the_title(); ?></h1>
            <div class="contact-form__container">
                <?php echo do_shortcode('[contact-form-7 id="26" title="Formulaire de contact 1"]'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>