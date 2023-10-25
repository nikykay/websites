<div class="cell medium-4 small-12 large-4 slide-div">
    <a class="perma" href="<?php the_permalink() ?>;">
        <?php the_post_thumbnail('medium'); ?>
        <h1 class="home-address"><?php the_field('address'); ?></h1>
        <h3 class="home-builder"><?php the_field('company'); ?></h3>
        <div class="home-number-div">
            <h4 class="home-number"><?php the_field('number'); ?></h4>
        </div>
    </a>
</div>


