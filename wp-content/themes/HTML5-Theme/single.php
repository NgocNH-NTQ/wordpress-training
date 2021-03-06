<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div id="tooplate_content">

	<div class="col_w570 float_l">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p><?php posted_in(); ?></p>
			<div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

				<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>

			</div>



		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

</div>

	<div class="col_w260b float_r">
		<?php get_sidebar(); ?>
	</div>

	<div class="cleaner"></div>
</div> <!-- end of content -->

<?php get_footer(); ?>