<?php
 $hero_artisan_text_image = get_field('hero_artisan_text_image')

?>

    <!--HOME PAGE SLIDER-->
    <?php home_slider_template(); ?>
    <div class="hero-sub-image">
        <img class="tm-text" src="<?php echo $hero_artisan_text_image; ?>" alt="rame">
    </div>
    <!--END of HOME PAGE SLIDER-->


