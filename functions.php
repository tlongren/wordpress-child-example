<?php

/*
* load_scripts
*
* load up css and javascript for tracking services and other custom stuff.
*/
function load_scripts() {
    // load styles
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

    // load parent theme css
    if ( is_child_theme() ) {
      wp_enqueue_style( 'parent-theme', trailingslashit( get_template_directory_uri() ) . 'style.css'  );
    }

    // load child theme css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // load javascript


}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

?>