<?php
/*
Plugin Name: Random Quote Admin Dashboard
Plugin URI: https://github.com/vukojevicc/random-quote-generator
Description: Displays a random quote on the WordPress admin dashboard
Version: 1.0
Author: Aleksandar Vukojevic
Author URI: https://aleksandarv.com/
License: GPL2
*/

function display_radnom_quote() {
    global $pagenow;
    if ($pagenow == 'index.php') {
        ?>
        <div id="random-quote"></div>
        <script src="<?php echo plugins_url( 'index.js', __FILE__ ); ?>"></script>
        <?php
    }
}
add_action('admin_footer', 'display_radnom_quote');