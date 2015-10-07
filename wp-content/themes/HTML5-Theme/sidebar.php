<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
 <aside id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
<!--		<h3>About Us</h3>-->
<!--		<p>Duis eu lectus et ante accumsan auctor. Sed nisi dui, pulvinar nec pretium ut, gravida a lectus. Quisque euismod, erat eget sodales adipiscing, risus tellus vulputate erat, sagittis euismod lorem tortor a metus. </p>-->
<!--		<a class="more float_r" href="#">More</a>-->
<!---->
<!--		<div class="cleaner h30"></div>-->

        <h3>Our Latest Projects</h3>
		<?php
		    $aryRecents = new WP_Query('posts_per_page=3');
            while ($aryRecents->have_posts()) : $aryRecents->the_post();
		?>
		<div class="sb_lp_box">
            <?php if(has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail() ?>
                </a>
            <?php } ?>

			<?php the_excerpt()?><a href="<?php the_permalink()?>">More...</a>
		</div>
        <?php endwhile; wp_reset_postdata() ?>

<!--    	<h2>--><?php //_e('Meta','html5reset'); ?><!--</h2>-->
<!--    	<ul>-->
<!--    		--><?php //wp_register(); ?>
<!--    		<li>--><?php //wp_loginout(); ?><!--</li>-->
<!--    		<li><a href="http://wordpress.org/" title="--><?php //_e('Powered by WordPress, state-of-the-art semantic personal publishing platform.','html5reset'); ?><!--">--><?php //_e('WordPress','html5reset'); ?><!--</a></li>-->
<!--    		--><?php //wp_meta(); ?>
<!--    	</ul>-->
    	
	<?php endif; ?>

</aside>