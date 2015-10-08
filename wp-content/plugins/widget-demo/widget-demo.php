<?php
/*
Plugin Name: Widget demo
Plugin URI:
Description: List random post use shortcode.
Version: 1.0
License: GPLv2
Author: NgocNH
Author URI: ngoc.nguyen.hong@ntq-solution.com.vn
*/

add_action('widgets_init','create_demo_widget');
add_action('wp_head','do_css_widget');
function do_css_widget(){
    echo '<style type="text/css">
                .widget li{list-style: none;};
                </style>
        ';
}

function create_demo_widget(){
    register_widget('Widget_Demo_Class');
}

class Widget_Demo_Class extends WP_Widget{
    /*
     * Thi?t l?p tên, ID c?a Widget
     * */
    function __construct(){
        parent::__construct(
            'list_post',
            'Widget Demo List Post',

            array(
                'description'=>'Description of widget'
            )
        );
    }

    /**
     * T?o form option cho widget
     */
    function form( $instance ) {
        $default = array(
            'title'=>'Random posts',
            'postNum' => 5
        );

        $instance = wp_parse_args((array) $instance, $default);
        $title = esc_attr($instance['title']);
        $postNum = esc_attr($instance['postNum']);

        echo "Title";
        echo '<input class = "widefat" type="text" name="'.$this->get_field_name('title').'" value="'.$title.'" />';
        echo 'Number posts';
        echo '<input class = "widefat" type="text" name="'.$this->get_field_name('postNum').'" value="'.$postNum.'" />';

    }

    /**
     * save widget form
     */

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['postNum'] = strip_tags($new_instance['postNum']);
        return $instance;
    }

    /**
     * Show widget
     */

    function widget( $args, $instance ) {
        $title = apply_filters('widget_title',$instance['title']);
        $postNum = $instance['postNum'];

        $before_widget = '<div id="%1$s" class="widget %2$s">';
        $after_widget = '</div>';
        $before_title = '<h3 class="widget-title">';
        $after_title = '</h3>';

        echo $before_widget;
        echo $before_title . $title . $after_title;
        $random_query = new WP_Query(array(
            'posts_per_page' => $postNum,
            'orderby' => 'rand'
        ));

        if ( $random_query->have_posts() ) :
            "<ol>";
            while ( $random_query->have_posts() ) :
                $random_query->the_post();?>

                <li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></li>

            <?php endwhile;
            "</ol>";
        endif;
        echo $after_widget;
    }

}