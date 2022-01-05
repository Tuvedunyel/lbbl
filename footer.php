<footer>
    <section class="contact-info">

        <div class="container-narrow">
           <?php if (get_field('phrase', 'options')): ?>
                <h4><?php the_field('phrase', 'options'); ?></h4>

            <?php elseif (get_field('phrase_deux_couleurs', 'options')): ?>
                <?php if (have_rows('phrase_deux_couleurs', 'options')) :
                    while (have_rows('phrase_deux_couleurs', 'options')): the_row(); ?>
                        <h4><?php the_sub_field('texte', 'options') ?></h4>
                    <?php endwhile ?>
                <?php endif ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="map"></section>
    <section class="footer-menu"></section>
    <section class="legal-mention"></section>
</footer>

<?php wp_footer( ); ?>
</body>
</html>