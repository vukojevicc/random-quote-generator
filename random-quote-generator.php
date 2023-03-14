<?php
/*
Plugin Name: Random Quote Generator Dashboard
Plugin URI: https://github.com/vukojevicc/random-quote-generator
Description: Displays a random quote on the WordPress dashboard index.php page
Version: 1.0
Author: Aleksandar Vukojevic
Author URI: https://aleksandarv.com/
*/

function my_admin_notice() {
    global $pagenow;
    if ($pagenow === 'index.php') {
        echo '<div id="random-quote-generator-div"><blockquote></blockquote><span></span></div>';
    }
}
add_action('admin_notices', 'my_admin_notice');

function insert_random_quote_generator_indexJS_file($hook) {
    if ($hook === 'index.php') {
        wp_enqueue_script('get-random-quote', plugins_url('index.js', __FILE__), array(), false, true);
    }
}
add_action('admin_enqueue_scripts', 'insert_random_quote_generator_indexJS_file');

function enqueue_random_quote_stylesheet() {
    wp_enqueue_style('random_quote_stylesheet', plugins_url('index.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'enqueue_random_quote_stylesheet');