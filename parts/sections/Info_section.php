<?php
$info_section_image = get_field('info_section_image');
$info_section_description = get_field('info_section_description');
?>

<section class="grid-container">
    <div class="for-flex for-info-image">
        <h1 class="info-text"><?php echo $info_section_image;?></h1>
    </div>
    
    <div class="for-info-description">
        <h1 class="info-sec-description"><?php echo $info_section_description;?></h1>
    </div>
</section>
