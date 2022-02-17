<section class="bottom-cabinet">
    <?php $logoCabinet = get_field('logo_cabinet'); ?>
    <?php if( !empty($logoCabinet) ): ?>
        <img class="image-bottom-cabinet" src="<?= $logoCabinet['url']; ?>" alt="<?= $logoCabinet['alt']; ?>" />
    <?php endif; ?>
    <div class="content-bottom-cabinet">
        <h3><?php the_field('titre_bas_page'); ?></h3>
        <?php the_field('contenu_bas_page'); ?>
    </div>
</section>