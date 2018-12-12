<?php

    get_header();
    ?>
<main>

<!--
                <article>
                                <h2>lorem</h2>-->
                        <!--        --><?php
                            //          if(have_posts())
                            //        {
                            //            while (have_posts())
                            //            {
                            //                the_post();
                            //
                            //
                            //                ?>
<!--                            <h1>-->
<!--                                --><?php //the_title(); ?>
<!--                            </h1>-->
<!--                            <div>-->
<!--                                    --><?php //the_post_thumbnail('100px');?>
<!--                            </div>-->
<!--                            <div>-->
<!--                                --><?php //the_content();?>
<!--                            </div>-->
<!--                            <div>-->
<!--                                --><?php //the_date();?>
<!--                            </div>-->

                        <section>
                                <h2>Derniers articles</h2>
                            <?php
                                    $args = array
                                    (
                                            'post_type' => 'post',
                                            'posts_per_page' => 100 );
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts() ) : $loop->the_post(); ?>
                                        <article>
                                        <?php
                                                the_post_thumbnail('100px');
                                                the_title();
                                                the_content();
                                                echo get_the_date( 'j' );
                                        ?>
                                        </article>

                                    <?php endwhile;

                            ?>
                        </section>
           <?php
//           }

//        }
        get_footer()
        ?>

</main>
