<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Utopia
 * @since Utopia 1.0
 */

get_header(); ?>


    
        <div class="col-lg-12 col-xs-12">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Are you kidding me? WTF? Wrong! Try again', 'utopia' ); ?></h1>
				</header>

				<div class="entry-content">
<!--					<p>--><?php //_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'utopia' ); ?><!--</p>-->
					<p>Fix that URL...</p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	<!-- #primary -->

<?php get_footer(); ?>