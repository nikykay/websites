<?php
$home_section_text = get_field('home_section_text');
$home_button = get_field('home_button');
$link = $home_button['url'];
$title = $home_button['title'];

?>
<section class="home-section">
    <h1 class="sponsors-sec-header"><?php echo $home_section_text; ?></h1>

    <div class="slide-class grid-container">


        <?php

        $args = array(
            'post_type' => 'homes',
            'post_status' => 'publish',
            'posts_per_page' => 9
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post(); ?>

            <div class="slick">
                    <div class="cell medium-4 small-12 slide-div">
                        <a class="perma" href="<?php the_permalink() ?>;">
                            <?php the_post_thumbnail('medium');?>
                            <h1 class="home-address for-font"><?php the_field('address');?></h1>
                            <h3 class="home-builder"><?php the_field('company');?></h3>
                            <div class="home-number-div">
                                <h4 class="home-number"><?php the_field('number');?></h4>
                            </div>
                        </a>
                    </div>
            </div>


        <?php endwhile;

        wp_reset_postdata();

        ?>

    </div>
    <div class="home-btn">
        <?php if ($title): ?>
            <a class="rame" href="/homes/"><p class="btn-text"><?php echo esc_html($title); ?></p></a>
        <?php endif; ?>
    </div>

</section>
