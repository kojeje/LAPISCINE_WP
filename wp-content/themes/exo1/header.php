<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> LA BIB' d'OCCAZ </title>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



        <!-- JS -->
        <link rel="stylesheet" href="{{ asset('assets/js/js.js') }}">
    <?php wp_head();?>
</head>
<body>
<header class="header">
    <div class="entete">
        <div class="logo">
            <a href="">
                <img src="/wp-content/uploads/2018/12/logo-150x150.png" alt="logo">
            </a>
        </div>


    <?php
        wp_nav_menu([
                'theme_location' =>'header'
            ]
        );


    ?>
    </div>
</header>
