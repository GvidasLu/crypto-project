<?php

function cryptominimal_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('cryptominimal-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('cryptominimal-font', "https://fonts.googleapis.com/css2?family=Staatliches&family=Zen+Kurenaido&display=swap", array(), '1.0', 'all');
    // wp_enqueue_style('cryptominimal-fonts', get_template_directory_uri() . "/style.css", array(), '1.0', 'all')

}

add_action( 'wp_enqueue_scripts', 'cryptominimal_register_styles');

?>