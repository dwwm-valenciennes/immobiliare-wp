<?php

function my_theme_enqueue_styles() {
    // Police Nunito
    wp_enqueue_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');
    // href="styles/style.css?v=< ?= time(); ? >" ==> Evite le cache du navigateur
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], time());

    // On intègre aussi le JS de Bootstrap
    // Le dernier paramètre "true" permet de mettre le JS dans le footer (avant la fin de body)
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Ajout des images à la une
add_theme_support('post-thumbnails');
