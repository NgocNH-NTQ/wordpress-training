<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
get_header();
?>
<div id="tooplate_content">

    <div class="col_w570 float_l">
        <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]'); ?>
    </div>

    <div class="col_w260b float_r">

        <?php get_sidebar(); ?>

    </div>

    <div class="cleaner"></div>
</div> <!-- end of content -->
<?php get_footer(); ?>
