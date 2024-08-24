<?php

add_theme_support('title-tag'); // support du title tag
add_theme_support('post-thumbnails'); // support des images à la une
add_theme_support('menus');

// Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-bundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), '4.5.2', true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');


// function dans la quel j'ajouterais tous mes type de contenu
function create_post_type() {
	register_post_type(
		'conseils', [
			'labels' => [ // ça sera le nom afficher dans mon menu word press avec la traduction
				'name' => __('Conseils'), // __() permet a wordpress que c'est contenu de traduction
				'singular_name' => __('Conseils')
			],
			'supports' => ['title', 'editor', 'thumbnail'], // on precise que notre post_type support title(un titre), editor(l'éditeur de contenu) et thumbnail(une photo a la une)
			'public' => true, // c'est un post_type publique
			'has_archive' => false, // en cas de suppression on peut retrouver notre post disparu
			'rewrite' => ['slug' => 'conseils'], // j'applique une réécriture d'url "services" au lieu de "slug"
			'menu_icon' => 'dashicons-clipboard' // je lui précise une icon dans la bar d'outil de l'admin wordpress
		]
	);
}
add_action('init', 'create_post_type');