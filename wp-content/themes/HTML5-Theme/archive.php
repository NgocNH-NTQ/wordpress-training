<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php _e('Archive for the','html5reset'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','html5reset'); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle"><?php _e('Author Archive','html5reset'); ?></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle"><?php _e('Blog Archives','html5reset'); ?></h2>
			
			<?php } ?>

<!--			--><?php //post_navigation(); ?>

			<div id="tooplate_content">

				<div class="col_w570 float_l">

					<div class="post_box">
						<p class="post_meta"><span class="cat">Posted in <a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
							| Date: June 24, 2048</p>

						<h2>Sed mollis elementum lectus rhoncus</h2>
						<img src="images/blog_image_03.jpg" alt="Image 03"/>

						<p>Nunc varius venenatis sem sed adipiscing. Mauris suscipit mauris in purus mattis placerat. Ut
							rhoncus imperdiet nibh sit amet sagittis. Aliquam erat volutpat. In pellentesque sagittis
							dictum. Aliquam erat volutpat. Donec ac aliquam neque. Validate <a
								href="http://validator.w3.org/check?uri=referer"
								rel="nofollow"><strong>XHTML</strong></a> and <a
								href="http://jigsaw.w3.org/css-validator/check/referer"
								rel="nofollow"><strong>CSS</strong></a>.</p>
						<a class="more" href="#">More</a>

						<div class="cleaner"></div>
					</div>

					<div class="post_box">
						<p class="post_meta"><span class="cat">Posted in <a href="#">3D</a>, <a href="#">Interactive</a></span>
							| Date: June 20, 2048</p>

						<h2>Duis eu lectus et ante accumsan auctor</h2>
						<img src="images/blog_image_02.jpg" alt="Image 02"/>

						<p> Aliquam erat volutpat. In pellentesque sagittis dictum. Aliquam erat volutpat. Donec ac
							aliquam neque. Sed tellus diam, consequat nec volutpat et, cursus ac nisi. Mauris in risus
							in diam consequat suscipit non ac enim. Mauris consequat commodo dolor sed vestibulum.</p>
						<a class="more" href="#">More</a>

						<div class="cleaner"></div>
					</div>

					<div class="post_box">
						<p class="post_meta"><span class="cat">Posted in <a href="#">Internet</a>, <a
									href="#">Marketing</a></span> | Date: June 18, 2048</p>

						<h2>Aenean vulputate tempus sollicitudin</h2>
						<img src="images/blog_image_01.jpg" alt="Image"/>

						<p>Maecenas scelerisque purus ac purus dapibus placerat. Nunc vulputate aliquet hendrerit.
							Mauris laoreet, purus id hendrerit porta, felis eros mollis ante, a pulvinar magna nisi quis
							turpis. Vestibulum purus erat, cursus eu dictum quis, ullamcorper et ipsum.</p>
						<a class="more" href="#">More</a>

						<div class="cleaner"></div>
					</div>

				</div>



<!--			--><?php //while (have_posts()) : the_post(); ?>
<!--			-->
<!--				<article --><?php //post_class() ?><!-->
<!--				-->
<!--						<h2 id="post---><?php //the_ID(); ?><!--"><a href="--><?php //the_permalink() ?><!--">--><?php //the_title(); ?><!--</a></h2>-->
<!--					-->
<!--						--><?php //posted_on(); ?>
<!---->
<!--						<div class="entry">-->
<!--							--><?php //the_content(); ?>
<!--						</div>-->
<!---->
<!--				</article>-->
<!---->
<!--			--><?php //endwhile; ?>

<!--			--><?php //post_navigation(); ?>
			
	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>


	<div class="col_w260b float_r">

		<?php get_sidebar(); ?>

	</div>

	<div class="cleaner"></div>
</div> <!-- end of content -->
<?php get_footer(); ?>
