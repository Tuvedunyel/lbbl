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
    <?php 
        $longitude = get_field('longitude', 'options');
        $latitude = get_field('latitude', 'options');
        $zoom = get_field('zoom', 'options');
        $textMarker = get_field('texte_marker', 'options');

    ?>
    <script>
        const longitude = JSON.stringify(<?php echo $longitude; ?>);
        const latitude = JSON.stringify(<?php echo $latitude; ?>);
        const zoom = JSON.stringify(<?php echo $zoom; ?>);
        const textMarker = JSON.stringify(<?php echo "'$textMarker'"; ?>);
    </script>
    <section class="map-container">
        <div id="map"></div>
    </section>
    <section class="footer-menu">
        <div class="socials">
            <?php dynamic_sidebar( 'footer-widget' ) ?>
        </div>
        <div class="footer-menu"></div>
        <div class="contact-details"></div>
    </section>
    <section class="legal-mention"></section>
</footer>

<?php wp_footer( ); ?>
</body>
</html>