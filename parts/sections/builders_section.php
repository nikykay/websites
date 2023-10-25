<?php
    $builder_section_text = get_field('builder_section_text');
    $builder_section_main_image = get_field('builder_section_main_image');
?>

<section class="builder-section">
    <h1 class="sponsors-sec-header"><?php echo $builder_section_text;?></h1>
    <div class="grid-container fluid for-flex">
        <div class="row">
            <div class="column1" style="background-color:#aaa; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%" <?php bg($builder_section_main_image);?>>
            </div>
            <div class="column2" style="background-color:#a76101;">
                <?php if(have_rows('builder_section_listing')):?>
                    <?php while( have_rows('builder_section_listing')): the_row();
                        $builder_name = get_sub_field('builder_name');
                        $builder_description = get_sub_field('builder_description');
                        ?>
                        <?php if($builder_name):?>
                            <div class="text-div">
                                <h2 class="builder-name"><?php echo $builder_name;?></h2>
                                <h1 class="builder-description"><?php echo $builder_description;?></h1>
                                <br/>
                            </div>
                        <?php endif;?>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>
    </div>

</section>


