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
<div class="banner">
    <!--    SECTION -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <!--                       SLIDER-->
                        <figure>
                            <div id="slider">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 img-fluid"
                                                 src='/wp-content/uploads/2018/12/19.jpg'
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid"
                                                 src='/wp-content/uploads/2018/12/18.jpg'
                                                 alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 img-fluid"
                                                 src='/wp-content/uploads/2018/12/13.jpg'
                                                 alt="Third slide">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <figcaption id="overlay" class="overlay">

                                <h1 class="black-btn" id="bouton2">LA BIB'd'OccaZ...</h1>

                                <p id="decouvrez">Parce que les livres ont plus de 9 vies...<br>
                                    Quand nous les avons lu...<br>
                                    Nous les partageons!</p>

                                <a href="#ancre1" class="btn_link">
                                    <h1 class="bouton">
                                        GO!
                                    </h1>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php get_header(); ?>

    <div class="bloc_page">

        <div class="gauche">
            <a id="ancre1"></a>
            <a href="http://localhost:8000/articles/">
                <h1>DERNIERS ARTICLES</h1>
            </a>

            <section class="boucle">
                    <?php
                        $args = array
                        (
                            'post_type' => 'post',
                            'posts_per_page' => 100 );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts() ) : $loop->the_post(); ?>
                            <article class="article">
                                <div class="article_section">
                                <?php
                                    the_post_thumbnail('100px');
                                    ?>
                                </div>
                                <div class="article_section">
                                    <h2>
                                <?php
                                    the_title();
                                    ?>
                                    </h2>
                                </div>
                                <div class="article_section">
                                <?php
                                    the_content();
                                    ?>
                                </div>
                                <div class="article_section">
                                <?php
                                    echo get_the_date( "j, F, Y" );
                                ?>
                                </div>

                            </article>

                        <?php endwhile;

                    ?>
                </article>
            </section>
        </div>
        <aside class="aside">
            <article>
                <div class="thumb">
                    <img src="/wp-content/uploads/2018/12/06-150x150.jpg" alt="">
                </div>

                <h2>
                    BONJOUR!
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi, consectetur consequuntur expedita quis tempora tenetur. Consequatur enim iusto numquam quae quidem, reiciendis tempora voluptate voluptatibus! Dolore hic inventore neque?<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis culpa cum cupiditate ducimus eligendi hic illo illum incidunt iste iusto magni minima natus nulla quidem quod repudiandae, unde, veritatis.br

                </p>
            </article>
        </aside>

    </div>


<?php get_footer(); ?>
</body>
</html>

<!-- scripts Bootstrap -->
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">

</script>

