<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ma Première Page </title>
    <?php wp_head();?>
</head>
<body>
<header>
    <?php
        wp_nav_menu([
                'theme_location' =>'header'
            ]
        );
    ?>
</header>
