<?php
 $sponsors_section_header_1 = get_field('sponsors_section_header_1');
 $sponsors_section_header_2 = get_field('sponsors_section_header_2');
 $sponsors_section_logo_1 = get_field('sponsors_section_logo_1');
 $sponsors_section_logo_2 = get_field('sponsors_section_logo_2');
 $sponsors_section_logo_3 = get_field('sponsors_section_logo_3');
 $sponsors_section_logo_4 = get_field('sponsors_section_logo_4');
 $sponsors_section_logo_5 = get_field('sponsors_section_logo_5');
?>
<section class="sponsors-sec grid-container fluid">
    <div class="grid-x grid-margin-x grid-margin-y">

        <div class="cell">
            <?php if($sponsors_section_header_1):?>
                <h1 class="sponsors-sec-header font-small"><?php echo $sponsors_section_header_1;?></h1>
            <?php endif;?>
        </div>

        <div class="cell small-12  medium-12 large-12  ">
                <div class="for-flex">
                    <?php if($sponsors_section_logo_1): ?>
                        <div class="link-div"><a class="link-image" href="https://www.hbag.org/" target="_blank"></a><img class="logo-img" src="<?php echo $sponsors_section_logo_1?>" alt="logo 1"/></div>
                    <?php endif;?>
                    <?php if($sponsors_section_logo_2): ?>
                        <div class="link-div"><a class="link-image" href="https://artisanhome.kchba.org/" target="_blank"></a><img class="logo-img" src="<?php echo $sponsors_section_logo_2?>" alt="logo 2"/></div>
                    <?php endif;?>
                    <?php if($sponsors_section_logo_3): ?>
                        <div class="link-div"><a class="link-image" href="https://www.fergusonshowrooms.com/" target="_blank"></a><img class="logo-img" src="<?php echo $sponsors_section_logo_3?>" alt="logo 3"/></div>
                    <?php endif;?>
                </div>
        </div>

        <div class="cell">
            <?php if($sponsors_section_header_2):?>
                <h1 class="sponsors-sec-header for-marg font-small"><?php echo $sponsors_section_header_2;?></h1>
            <?php endif;?>
        </div>

        <div class="cell small-12 medium-12 large-12">
                <div class="for-flex">
                    <?php if($sponsors_section_logo_4):?>
                        <div class="link-div"><a class="link-image" href="https://artisanhome.kchba.org/" target="_blank"></a><img class="logo-img" src="<?php echo $sponsors_section_logo_4?>" alt="logo 4"/></div>
                    <?php endif;?>
                    <?php if($sponsors_section_logo_5):?>
                        <div class="link-div"><a class="link-image" href="https://rmhc.org/" target="_blank"></a><img class="for-sing-marg log-img" src="<?php echo $sponsors_section_logo_5?>" alt="logo 5"/></div>
                    <?php endif;?>
                </div>
        </div>

    </div>


</section>

