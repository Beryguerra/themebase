<?php


//load_stylesheet pode ter outro nome
function load_stylesheet() {

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
        wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');