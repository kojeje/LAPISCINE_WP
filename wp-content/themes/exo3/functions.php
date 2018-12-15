<?php

add_theme_support( 'post-thumbnails' );

function dr_scripts() {
	wp_enqueue_style( 'styles_principaux', get_stylesheet_uri() );
	wp_enqueue_script( 'scripts_principaux', get_stylesheet_directory_uri()."/assets/js/main.js" );
}
add_action( 'wp_enqueue_scripts', 'dr_scripts' );

register_nav_menus( array(
    'header_gauche' => ('Header_gauche'),
    'header_droit' => ('Header_droit'),
    'footer' => ( 'Footer')
) );

// fonction pour créer des variables globales, accessibles dans tous les fichiers twig
function add_to_context($data){

	// on appelle une instance de TimberMenu avec en parametre le menu qu'on veut récupérer
	$data['header_gauche'] = new TimberMenu('header_gauche');
	$data['header_droit'] = new TimberMenu('header_droit');
	$data['footer'] = new TimberMenu('footer');

	return $data;
}

// On ajoute le résultat de notre fonction au context de twig (contexte globale)
add_filter('timber_context', 'add_to_context');