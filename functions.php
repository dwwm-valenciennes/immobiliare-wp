<?php

function my_theme_enqueue_styles() {
    // href="styles/style.css?v=< ?= time(); ? >" ==> Evite le cache du navigateur
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], time());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
