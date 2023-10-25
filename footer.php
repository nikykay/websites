<?php
/**
 * Footer
 */

$footer_text_1 = get_field('footer_text_1','options');
$footer_text_2 = get_field('footer_text_2','options');
$footer_custom_logo = get_field('footer_custom_logo','options');
?>


<footer class="footer">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell  for-padding">
                <p class="footer-text-1"><?php echo $footer_text_1;?></p>
			</div>
            <div class="cell small-2 small-offset-4 medium-2 medium-offset-5 large-2 large-offset-5 ">
                <?php get_template_part('parts/socials'); // Social profiles ?>
            </div>
            <div class="cell small-12  medium-10 medium-offset-4 large-offset-4">
                <div>
                    <img class="footer-custom-logo" src="<?php echo $footer_custom_logo; ?>" alt="">
                </div>
            </div>
            <div class="cell  for-padding">
                <p class="footer-text-2"><?php echo $footer_text_2;?></p>
            </div>
		</div>
	</div>

</footer>


<?php wp_footer(); ?>
</body>
</html>