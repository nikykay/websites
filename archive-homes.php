<?php
/**
 * Archive
 *
 * Standard loop for the archive page
 */
$archive_text_1 = get_field('archive_text_1', 'option_archive_homes');
$archive_text_2 = get_field('archive_text_2', 'option_archive_homes');
$archive_input = get_field('archive_input', 'option_archive_homes');
get_header(); ?>
    <main class="main-content">
        <div class="grid-x grid-margin-x grid-margin-y">
            <div class="archive-header-div ">
                <?php if ($archive_text_1): ?>
                    <h1 class="archive-text-1 txt1 for-pad "><?php echo $archive_text_1; ?></h1>
                <?php endif; ?>
                <?php if ($archive_text_2): ?>
                    <h2 class="archive-text-2 txt2 for-pad  "><?php echo $archive_text_2; ?></h2>
                <?php endif; ?>
                <div class="txt3">
                    <?php get_sidebar('right'); ?>
                </div>
            </div>
        </div>
    </main>

<!--  -->
<main class="main-content">
    <div class="grid-container">

        <?php if (have_posts()) : ?>
            <div class="filters">
                <?php get_sidebar('right'); ?>
            </div>
            <div class="grid-x grid-margin-x">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('parts/loop', 'homes'); ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
