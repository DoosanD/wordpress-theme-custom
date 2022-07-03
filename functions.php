<?php

// Adds dynamic title tag support
add_theme_support('title_tag');


function followandrew_register_styles()
{

    wp_enqueue_style('followandrew-bootstrap', get_template_directory_url() . "/style.css", array(), '1.0', 'all');

}
;

add_action('wp_enqueue_scripts', 'followandrew_register_styles');

?>