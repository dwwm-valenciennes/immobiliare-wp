<?php

function my_theme_enqueue_styles() {
    // Police Nunito
    wp_enqueue_style('nunito', 'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');
    // Slick CSS
    wp_enqueue_style('slick', get_template_directory_uri().'/node_modules/slick-carousel/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri().'/node_modules/slick-carousel/slick/slick-theme.css');
    // href="styles/style.css?v=< ?= time(); ? >" ==> Evite le cache du navigateur
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], time());

    // Slick JS
    wp_enqueue_script('slick', get_template_directory_uri().'/node_modules/slick-carousel/slick/slick.min.js', [], false, true);
    // On intègre aussi le JS de Bootstrap
    // Le dernier paramètre "true" permet de mettre le JS dans le footer (avant la fin de body)
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', [], false, true);
    // Notre script JS
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Ajout des images à la une
add_theme_support('post-thumbnails');

// Ajouter un emplacement de menu
register_nav_menu('main-menu', 'Menu principal');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Création d'un custom post type Project
function register_my_cpt() {
    register_post_type('project', [
        'label' => 'Projets',
        'labels' => [
            'name' => 'Projets',
            'singular_name' => 'Projet',
            'all_items' => 'Tous les projets',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Éditer le projet',
            'new_item' => 'Nouveau projet',
            'view_item' => 'Voir le projet',
            'search_items' => 'Rechercher parmi les projets',
            'not_found' => 'Pas de projet trouvé',
            'not_found_in_trash' => 'Pas de projet dans la corbeille'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'author', 'thumbnail'],
        'has_archive' => true,
        'show_in_rest' => true, // Si on veut activer Gutenberg
        'menu_icon' => 'dashicons-portfolio',
    ]);
}

add_action( 'init', 'register_my_cpt' );
