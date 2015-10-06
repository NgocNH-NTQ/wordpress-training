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
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php posted_on(); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>

		</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

</div>

<div class="col_w260b float_r">

	<?php get_sidebar(); ?>

</div>

<div class="cleaner"></div>
</div> <!-- end of content -->
<?php get_footer(); ?>
