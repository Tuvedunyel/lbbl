<?php get_header(); ?>
    <main>
        <div class="container-narrow">
            <h1><?php the_title(); ?></h1>
            <article>
                <?php the_content(); ?>
            </article>
        </div>
    </main>
<?php get_footer(); ?>