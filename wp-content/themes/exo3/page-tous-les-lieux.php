<?php

//OBLIGATOIRE : Récupère les variables globales de Wordpress
    $context = Timber::get_context();

// tableau d'arguments pour modifier la requête en base
// de données, et venir récupérer uniquement les trois
// derniers articles
    $args_posts = [
        'post_type' => 'lieux'
    ];

// récupère les articles en fonction du tableau d'argument $args_posts
// en utilisant la méthode de Timber get_posts
// puis on les enregistre dans l'array $context sous la clé "posts"
    $context['posts'] = Timber::get_posts($args_posts);

// appelle la vue twig "index.twig" située dans le dossier views
// en lui passant la variable $context qui contient notamment ici les articles
    Timber::render('page-tous-les-lieux.twig', $context);