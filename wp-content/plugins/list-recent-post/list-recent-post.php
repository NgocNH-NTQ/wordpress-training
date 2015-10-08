<?php
/*
Plugin Name: List recent post
Plugin URI:
Description: List random post use shortcode.
Version: 1.0
License: GPLv2
Author: NgocNH
Author URI: ngoc.nguyen.hong@ntq-solution.com.vn
*/

function rand_post ($param, $content){
    $random_query = new WP_Query(array(
        'posts_per_page' => $param ? $param['post'] : 10,
        'orderby' => 'rand'
    ));

    ob_start();
    if ( $random_query->have_posts() ) :
        "<ol>";
        while ( $random_query->have_posts() ) :
            $random_query->the_post();?>

            <li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></li>

        <?php endwhile;
        "</ol>";
    endif;
    $list_post = ob_get_contents(); //L?y toàn b? n?i dung phía trên b? vào bi?n $list_post ?? return

    ob_end_clean();

    return $list_post;
}

function listPost(){
    add_shortcode('list_rand_post','rand_post');
}

add_action('plugins_loaded','listPost');
