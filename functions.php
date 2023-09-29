<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}


// variables
define("WP_THEME", wp_get_theme());
define("MARWEB_URL", trailingslashit(get_template_directory_uri()));
//includes
include_once(get_theme_file_path( 'includes/front/enqueue.php' ));
include_once(get_theme_file_path( 'includes/blockPatterns.php' ));


// hooks
add_action( 'wp_enqueue_scripts', 'mwt_enqueue' );
add_action( 'init', 'marweb_register_block_patterns_category', 9 );

