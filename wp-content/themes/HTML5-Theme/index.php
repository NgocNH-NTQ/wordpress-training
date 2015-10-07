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
        <?php
        query_posts('posts_per_page=1');
        if(have_posts()) : while(have_posts()) : the_post() ?>
            <p><em><?php the_title() ?></em></p>
            <?php the_excerpt(); ?>
        <?php endwhile; ?>
        <?php else :?>
            <?php _e('Nothing Found','html5reset'); ?>
        <?php endif;?>

        <a href="<?php the_permalink(); ?>" class="learnmore">
            <span style="text-indent: -9999999999px; position: absolute">Learn more</span>
        </a>
        <div class="cleaner"></div>
    </div>

    <div class="col_w880">
        <?php
        $count_post=0;
        $args = array(
            'cat'=>4,
            'posts_per_page'=>3,
            'orderby'=>'rand'
        );
        $tutorials = new WP_Query($args);
        while ($tutorials->have_posts() && $count_post < 3){
            $tutorials->the_post();
            $count_post ++;
        ?>
        <div class="col_w260 fp_box <?php echo ($count_post == 3)?'col_last':''; ?>">
            <h2><?php the_title();?></h2>
            <?php the_excerpt()?>

            <a class="more" href="<?php the_permalink()?>">Learn more</a>
        </div>
        <?php } wp_reset_postdata(); ?>

        <div class="cleaner"></div>
    </div>

    <div class="col_w880 portfolio">

        <h2>PHP</h2>
        <?php
            $count_PHP_post =0;
            $params = array(
                'cat'=>7,
                'posts_per_page'=>3,
                'orderby'=>'rand',
            );
            $aryPhpPosts = new WP_Query($params);
            while($aryPhpPosts->have_posts() && $count_PHP_post <3 ){
                $aryPhpPosts->the_post();
                $count_PHP_post ++;
        ?>
        <div class="col_w260 <?php echo ($count_PHP_post == 3)?'col_last':''; ?>">
            <h6><?php the_title(); ?></h6>
            <?php if(has_post_thumbnail()) the_post_thumbnail()?>

            <?php the_excerpt(); ?>
            <a class="more" href="<?php the_permalink() ?>">Learn more</a>
        </div>
        <?php } wp_reset_postdata()?>

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
