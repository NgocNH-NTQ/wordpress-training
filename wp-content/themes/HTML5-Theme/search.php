<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<div id="tooplate_content">

	<div class="col_w570 float_l">
	<?php if (have_posts()) : ?>

		<h2><?php _e('Search Results','html5reset'); ?></h2>

		<?php post_navigation(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php posted_on(); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing found... 404','html5reset'); ?></h2>

	<?php endif; ?>

	</div>

	<div class="col_w260b float_r">

		<?php get_sidebar(); ?>

	</div>

	<div class="cleaner"></div>
</div> <!-- end of content -->

<?php get_footer(); ?>
