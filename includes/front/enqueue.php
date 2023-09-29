<?php
function mwt_enqueue() {
    $version = WP_THEME->Version;

    wp_register_style( "bootstrap_css", "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css", array(), "4.0.0");
    wp_register_style( "mwt_theme", get_theme_file_uri( 'assets/public/index.css' ));

    
    wp_register_script( "query-3.2.1.slim.min.js", "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), "3.2.1" );
    wp_register_script( "popper.js-bootstrap-dep", "https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js", array("query-3.2.1.slim.min.js"), "1.12.9" );
    wp_register_script( "bootstrap.min", "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js", array("query-3.2.1.slim.min.js","popper.js-bootstrap-dep"), "4.0.0" );
    wp_register_script( "header.js", get_theme_file_uri( 'assets/public/js/header.js' ), array(),  $version );
    // wp_register_style( $handle:string, $src:string|false, $deps:array, $ver:string|boolean|null, $media:string )
    // wp_register_script( string $handle, string|false $src, string[] $deps = array(), string|bool|null $ver = false, array|bool $args = array() ): bool


    wp_enqueue_style("bootstrap_css" );
    wp_enqueue_style( "mwt_theme" );

    wp_enqueue_script( "query-3.2.1.slim.min.js" );
    wp_enqueue_script( "popper.js-bootstrap-dep" );
    wp_enqueue_script( "bootstrap.min" );
    wp_enqueue_script( "header.js" );
}