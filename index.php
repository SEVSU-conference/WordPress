<?php


get_header();
global $redux_demo;
?>
<?php if($redux_demo['blocks'][1]==true):?>
    <section class="start-page" id="start-page">
        <a name="main" style="display: none"></a>
        <div class="container">
            <div class="start-page-text">
                <h3 style="color: #ffffff;"><?echo $redux_demo['date-conference'];?></h3>
                <h3 style="color: #ffffff;"><?echo $redux_demo['place-conference'];?></h3>
                <h1 style="color: #ffffff;"><?echo $redux_demo['type-conference'];?></h1>
                <p>2020</p>
                <h2 style="color: #ffffff;"><?echo $redux_demo['name-conference'];?></h2>
                <h4 style="color: #ffffff;"><?echo $redux_demo['description-conference'];?></h4>
                <form action="#start-page">
                    <button class="reg-button">
                        Регистрация
                    </button>
                </form>
            </div>
            <div class="inkblot-column">
                <div class="inkblot">
                    <img src=<?echo get_template_directory_uri()."/assets/img/inkblot1.svg"?> alt="Фон">
<!--                    <p><span>3</span><br>дня</p>-->
                    <p><span><?echo $redux_demo['block-conference1-header'];?></span><br><?echo $redux_demo['block-conference1-content'];?></p>
                </div>
                <div class="inkblot">
                    <img src=<?echo get_template_directory_uri()."/assets/img/inkblot2.svg"?>  alt="Фон">
                    <p><span><?echo $redux_demo['block-conference2-header'];?></span><br><?echo $redux_demo['block-conference2-content'];?></p>
                </div>
                <div class="inkblot">
                    <img src=<?echo get_template_directory_uri()."/assets/img/inkblot3.svg"?>  alt="Фон">
                    <p><span><?echo $redux_demo['block-conference3-header'];?></span><br><?echo $redux_demo['block-conference3-content'];?></p>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>
<?php if($redux_demo['blocks'][2]==true):?>
    <section class="description" >
        <div class="description-text">
            <h5 style="color: #000000"><a name="description" ><?echo $redux_demo['header-description'];?></a></h5>
            <p><?echo $redux_demo['description'];?></p>
        </div>
        <div class="description-image"></div>
    </section>
<?php endif;?>
<?php if($redux_demo['blocks'][3]==true):?>
    <section class="main-tracks">
        <h3><a name="tracks">Основные треки</a></h3>

        <div class="container">
            <?


            $id=5; // Идентификатор нужной рубрики
            $n=10;   // Количество выводимых записей
            $recent = new WP_Query("cat=$id&showposts=$n");
            while( $recent->have_posts() ): $recent->the_post();
                ?>
            <div class="track">
                <div class="track-icon">
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon-bg1.svg"?> >
                    <img src=<?echo get_the_post_thumbnail_url()?> style="filter:invert(0);" alt="Иконка трека">
                </div>
                <div class="track-text">
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>
            </div>

                <?php
            endwhile;
            ?>


        </div>
    </section>
<?php endif;?>
<?php if ($redux_demo['blocks'][4] == true): ?>
    <section class="speakers">
        <div class="container">
            <h3><a name="speakers">Спикеры</a></h3>
            <div class="owl-carousel owl-theme">

                <?$id=6; // Идентификатор нужной рубрики
                $n=10;   // Количество выводимых записей
                $recent = new WP_Query("cat=$id&showposts=$n");
                while( $recent->have_posts() ): $recent->the_post();
                    ?>

                    <div class="item">
                        <div class="item-text">
                            <h4 style="color: #ffffff;"><?php the_title(); ?></h4>
                            <hr>
                            <p><?php the_content(); ?></p>
                        </div>
                        <img src=<?echo get_the_post_thumbnail_url()?> alt="Спикер">
                    </div>
                    <?php
                endwhile;
                ?>


                <!-- для тестирования owl-carousel -->
<!--                <div class="item">-->
<!--                    <div class="item-text">-->
<!--                        <h4>Владимир Нечаев</h4>-->
<!--                        <hr>-->
<!--                        <p>Ректор Севастопольского государственного университета</p>-->
<!--                    </div>-->
<!--                    <img src=--><?//echo get_template_directory_uri()."/assets/img/speaker4.png"?><!-- alt="Спикер">-->
<!--                </div>-->
            </div>
        </div>
    </section>
<?php endif;?>


<?php

get_footer();
