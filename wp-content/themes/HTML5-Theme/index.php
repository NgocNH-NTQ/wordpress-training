<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<!--START CONTENT-->
<div id="tooplate_content">

    <div class="col_w880 home_intro">
        <p><em>Pellentesque habitant morbi tristique senectus et netus et.</em> Quisque blandit porttitor consequat.
            Praesent viverra lorem at magna tempor vitae egestas risus convallis.Validate <a
                href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a
                href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. </p>
        <a href="#" class="learnmore"></a>

        <div class="cleaner"></div>
    </div>

    <div class="col_w880">

        <div class="col_w260 fp_box">
            <h2>Online Marketing</h2>

            <p>Blue Wave is brought to you by <a rel="nofollow" href="http://www.tooplate.com">Website Templates</a>.
                Feel free to adapt and apply this template for your websites. Credits go to <a rel="nofollow"
                                                                                               href="http://www.photovaco.com"
                                                                                               target="_blank">Free
                    Photos</a> for photos used in this template. Sed ac ipsum leo.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="col_w260 fp_box">
            <h2>Website Templates</h2>

            <p><em>Vivamus non justo lacus, nec tristique sapien.</em> Etiam quis velit lacus. In sodales, ligula a
                condimentum cursus, elit elit pulvinar massa, non placerat mi sit amet nisi. Morbi et arcu et urna
                tristique imperdiet non ut massa. Sed sit amet turpis.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="col_w260 fp_box col_last">
            <h2>Graphic Designs</h2>

            <p><em>Etiam ut nibh et urna cursus ultricies nec vel nunc.</em> In hac habitasse platea dictumst. In
                pretium eleifend arcu, sit amet faucibus nunc egestas ac. Donec pharetra interdum sem, et condimentum
                nisl lacinia eget. Proin in tortor dolor.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="cleaner"></div>
    </div>

    <div class="col_w880 portfolio">

        <h2>Portfolio</h2>

        <div class="col_w260">
            <h6>Etiam Magna Metus</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/tooplate_image_01.jpg" alt="Image 01"/>

            <p>Nunc ut nisi felis, et iaculis erat ut mauris sit amet purus molestie malesuada.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="col_w260">
            <h6>Morbi Battis Porta</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/tooplate_image_02.jpg" alt="Image 02"/>

            <p>Etiam et quam metus, vitae sodales tortor. In risus urna, scelerisque eu vetibulums.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="col_w260 col_last">
            <h6>Nullam ut Neque Neque</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/_/inc/images/tooplate_image_03.jpg" alt="Image 03"/>

            <p>Curabitur lobortis imperdiet nisi, malesuada egestas purus viverra vitae.</p>
            <a class="more" href="#">Learn more</a>
        </div>

        <div class="cleaner"></div>
    </div>

</div> <!-- end of content -->




<!--END CONTENT-->

<!--	--><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!---->
<!--		<article --><?php //post_class() ?><!-- id="post---><?php //the_ID(); ?><!--">-->
<!---->
<!--			<h2><a href="--><?php //the_permalink() ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!---->
<!--			--><?php //posted_on(); ?>
<!---->
<!--			<div class="entry">-->
<!--				--><?php //the_content(); ?>
<!--			</div>-->
<!---->
<!--			<footer class="postmetadata">-->
<!--				--><?php //the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
<!--				--><?php //_e('Posted in','html5reset'); ?><!-- --><?php //the_category(', ') ?><!-- | -->
<!--				--><?php //comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
<!--			</footer>-->
<!---->
<!--		</article>-->
<!---->
<!--	--><?php //endwhile; ?>
<!---->
<!--	--><?php //post_navigation(); ?>
<!---->
<!--	--><?php //else : ?>
<!---->
<!--		<h2>--><?php //_e('Nothing Found','html5reset'); ?><!--</h2>-->
<!---->
<!--	--><?php //endif; ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
