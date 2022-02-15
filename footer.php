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
        const longitude = JSON.stringify( <?php echo $longitude; ?> );
        const latitude = JSON.stringify( <?php echo $latitude; ?> );
        const zoom = JSON.stringify( <?php echo $zoom; ?> );
        const textMarker = JSON.stringify( <?php echo "'$textMarker'"; ?> );

    </script>
    <section class="map-container">
        <div id="map"></div>
    </section>
    <section class="footer-menu">
        <div class="container-narrow">


            <div class="socials">
                <h4><?= get_field('titre_socials', 'options') ?></h4>
                <?php if (have_rows('socials', 'options')): ?>
                <div class="socials-container">

                    <?php while (have_rows('socials', 'options')): the_row(); ?>
                    <?php 
                    $link = get_sub_field('lien_socials', 'options');

                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a href="<?= $link_url; ?>" title="<?= $link_title; ?>" target="<?= $link_target; ?>">
                        <?php $image = get_sub_field('image_socials', 'options');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        ?>
                        <img src="<?= esc_url($url); ?>" alt="<?= esc_attr($alt); ?>">
                    </a>
                    <?php endwhile ?>
                </div>
                <?php endif ?>
            </div>
            <div class="quick-access">
                <h4><?= get_field('titre_acces_rapide', 'options'); ?></h4>
                <nav id="footer-navigation" aria-label="information de contact">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'menu_class' => 'footer-menu__list',
                        'fallback_cb' => false,
                        ) );
                ?>
                </nav>
            </div>
            <div class="contact-details">
                <h4><?= get_field('titre_contactez_nous', 'options'); ?></h4>
                <address>
                    <?php if (get_field('adresse', 'options')): ?>
                    <strong><?= get_field('adresse', 'options'); ?></strong>
                    <?php endif; ?>
                    <?php if (get_field('telephone', 'options')): ?>
                    <?php 
                        $tel = get_field('lien_telephone', 'options');
                        $tel_url = $tel['url'];
                        $tel_title = $tel['title'];
                    ?>
                    <strong>Téléphone :</strong>
                    <p><?= get_field('telephone', 'options'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('email', 'options')): ?>
                    <strong>Mail :</strong>
                    <a href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a>
                    <?php endif; ?>
                </address>
            </div>
        </div>
    </section>
    <section class="legal-mention">
        <div class="container-narrow">
            <nav id="mention-menu" aria-label="Mentions légales, politique de confidentialité et plan du site">
                <?php wp_nav_menu( array(
                    'theme_location' => 'mention-menu',
                    'container' => false,
                    'menu_class' => 'legal-menu__list',
                    'fallback_cb' => false,
                    ) );
                ?>
            </nav>
        </div>
    </section>
</footer>

<?php wp_footer( ); ?>
</body>

</html>
