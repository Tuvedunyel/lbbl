<?php 
/*
Template Name: Cabinet
*/
get_header(); ?>
<main id="cabinet">
    <h1 class="screen-reader-text"><?php the_title(); ?></h1>
    <section id="title-cabinet">
        <div class="left-image">
            <?php $image_cabinet = get_field('image_cabinet'); 
            if( !empty($image_cabinet) ): ?>
                <img class="image-cabinet" src="<?= $image_cabinet['url']; ?>" alt="<?= $image_cabinet['alt']; ?>" />
            <?php endif; ?>
        </div>
        <div class="right-content-cabinet">
            <?php $logoCabinet = get_field('logo_cabinet');
            if( !empty($logoCabinet) ): ?>
                <img class="logo-cabinet" src="<?= $logoCabinet['url']; ?>" alt="<?= $logoCabinet['alt']; ?>" />
            <?php endif; ?>
            <?php the_field('content'); ?>
        </div>
    </section>
    <section class="suivi-contrat">
        <div class="right-content-cabinet">
            <?php the_field('contenu'); ?>
        </div>
        <div class="left-image">
            <?php $image_suivi = get_field('image_suivi'); 
            if( !empty($image_suivi) ): ?>
                <img src="<?= $image_suivi['url']; ?>" alt="<?= $image_suivi['alt']; ?>" />
            <?php endif; ?>
        </div>
    </section>
    <div class="container-narrow">
        <artile id="cabinet-content">
            <?php the_content(); ?>
        </artile>
        <section class="bottom-cabinet">
            <?php if( !empty($logoCabinet) ): ?>
                <img class="image-bottom-cabinet" src="<?= $logoCabinet['url']; ?>" alt="<?= $logoCabinet['alt']; ?>" />
            <?php endif; ?>
            <div class="content-bottom-cabinet">
                <h3><?php the_field('titre_bas_page'); ?></h3>
                <?php the_field('contenu_bas_page'); ?>
            </div>
        </section>
    </div>
</main>	
<?php get_footer(); ?>