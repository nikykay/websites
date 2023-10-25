<?php
$artisan_guide_section_blur_background = get_field('artisan_guide_section_blur_background');
$artisan_guide_section_inner_image_blur = get_field('artisan_guide_section_inner_image_blur');
$artisan_guide_section_inner_image = get_field('artisan_guide_section_inner_image');
$artisan_guide_section_text = get_field('artisan_guide_section_text');
$artisan_guide_section_button = get_field('artisan_guide_section_button');
$url = $artisan_guide_section_button['url'];
$title = $artisan_guide_section_button['title'];
?>

<section class="artisan-guide-sec for-bg" <?php if($artisan_guide_section_blur_background):?> style= "background-image: url('<?= $artisan_guide_section_blur_background ;?>')" <?php endif;?>>
            <div class="grid-container fluid for-flex inner-div">
                <?php if($artisan_guide_section_inner_image_blur):?>
                    <img class="inner-image"  src="<?php echo $artisan_guide_section_inner_image_blur;?>" alt="">
                <?php endif;?>
                <?php if($artisan_guide_section_inner_image):?>
                    <img class="inner-image-2" src="<?php echo $artisan_guide_section_inner_image;?>" alt="">
                <?php endif;?>
                <?php if($artisan_guide_section_button):?>
                    <a class="inner-button" href="<?php echo $url;?>" download="TestPDFfile.pdf"><p class="btn-text"><?php echo $title;?></p></a>
                <?php endif;?>
            </div>

</section>

