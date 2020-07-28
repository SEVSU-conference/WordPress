<?php


get_header();
global $redux_demo;
?>


    <!DOCTYPE html>
    <html>
    <head>
        <title><?bloginfo( 'name' );?></title>
        <!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
        <!--    <link href="css/fonts.css" rel="stylesheet">-->
        <!--    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css"> -->
        <!--     owl-carousel -->
        <!--    <link rel="stylesheet" href="owl-carousel/owl.carousel.min.css">-->
        <!--    <link rel="stylesheet" href="owl-carousel/owl.theme.default.css">-->

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
        <?wp_head();?>
        <!-- Иконка фавикона. Узнать про другие способы вставки -->
        <!--    <link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <meta charset="utf-8">

    </head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href=""><img class="logo" src=<?echo get_template_directory_uri()."/assets/img/logo.png";?> alt="logo"></a>
                <nav class="navbar">
                    <ul>
                        <!--                --><?//wp_nav_menu(
                        //			array(
                        //				'theme_location' => 'menu-1',
                        //                'container_class'        => 'navbar',
                        //			)
                        //			);?>
                        <?php if($redux_demo['blocks'][1]==true):?><li><a href="#main">Главная</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][2]==true):?><li><a href="#description">О проекте</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][3]==true):?><li><a href="#tracks">Треки</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][4]==true):?><li><a href="#speakers">Спикеры</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][5]==true):?><li><a href="">Мероприятия</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][6]==true):?><li><a href="">Купить билеты</a></li><?endif;?>
                        <?php if($redux_demo['blocks'][7]==true):?><li><a href="">Партнеры</a></li><?endif;?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<?php if ($redux_demo['blocks'][1] == true): ?>
    <section class="start-page" id="start-page">
        <a name="main" style="display: none"></a>
        <div class="container">
            <div class="start-page-text">
                <h3 style="color: #ffffff;"><? echo $redux_demo['date-conference']; ?></h3>
                <h3 style="color: #ffffff;"><? echo $redux_demo['place-conference']; ?></h3>
                <h1 style="color: #ffffff;"><? echo $redux_demo['type-conference']; ?></h1>
                <p>2020</p>
                <h2 style="color: #ffffff;"><? echo $redux_demo['name-conference']; ?></h2>
                <h4 style="color: #ffffff;"><? echo $redux_demo['description-conference']; ?></h4>
                <form action="#start-page">
                    <button class="reg-button">
                        Регистрация
                    </button>
                </form>
            </div>
            <div class="inkblot-column">
                <div class="inkblot">
                    <img src=<? echo get_template_directory_uri() . "/assets/img/inkblot1.svg" ?> alt="Фон">
                    <!--                    <p><span>3</span><br>дня</p>-->
                    <p>
                        <span><? echo $redux_demo['block-conference1-header']; ?></span><br><? echo $redux_demo['block-conference1-content']; ?>
                    </p>
                </div>
                <div class="inkblot">
                    <img src=<? echo get_template_directory_uri() . "/assets/img/inkblot2.svg" ?>  alt="Фон">
                    <p>
                        <span><? echo $redux_demo['block-conference2-header']; ?></span><br><? echo $redux_demo['block-conference2-content']; ?>
                    </p>
                </div>
                <div class="inkblot">
                    <img src=<? echo get_template_directory_uri() . "/assets/img/inkblot3.svg" ?>  alt="Фон">
                    <p>
                        <span><? echo $redux_demo['block-conference3-header']; ?></span><br><? echo $redux_demo['block-conference3-content']; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if ($redux_demo['blocks'][2] == true): ?>
    <section class="description" id="description">
        <div class="description-img">
            <img src=<?= get_template_directory_uri() . "/assets/img/conf-example.png" ?> alt="Фон">
        </div>
        <div class="description-text">
            <h5 style="color: #000000"><a name="description"><? echo $redux_demo['header-description']; ?></a></h5>
            <p><? echo $redux_demo['description']; ?></p>
        </div>

    </section>
<?php endif; ?>
<?php if ($redux_demo['blocks'][3] == true): ?>
    <section class="main-tracks">
        <h3><a name="tracks">Основные треки</a></h3>

        <div class="container">
            <?
            $id = 5; // Идентификатор нужной рубрики
            $n = 10;   // Количество выводимых записей
            $recent = new WP_Query("cat=$id&showposts=$n");
            while ($recent->have_posts()): $recent->the_post();
                ?>
                <div class="track">
                    <div class="track-icon">
                        <img src=<? echo get_template_directory_uri() . "/assets/img/track-icon-bg1.svg" ?>>
                        <img src=<? echo get_the_post_thumbnail_url() ?> style="filter:invert(0);" alt="Иконка трека">
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
<?php endif; ?>
<?php if ($redux_demo['blocks'][4] == true): ?>
    <section class="speakers">
        <div class="container">
            <h3><a name="speakers">Спикеры</a></h3>
            <div class="owl-carousel owl-theme">

                <? $id = 6; // Идентификатор нужной рубрики
                $n = 10;   // Количество выводимых записей
                $recent = new WP_Query("cat=$id&showposts=$n");
                while ($recent->have_posts()): $recent->the_post();
                    ?>

                    <div class="item">
                        <div class="item-text">
                            <h4 style="color: #ffffff;"><?php the_title(); ?></h4>
                            <hr>
                            <p><?php the_content(); ?></p>
                        </div>
                        <img src=<? echo get_the_post_thumbnail_url() ?> alt="Спикер">
                    </div>
                <?php
                endwhile;
                ?>


            </div>
        </div>
    </section>
<?php endif; ?>
<?php if ($redux_demo['blocks'][5] == true): ?>
    <section class="at-conference" id="at-conference">
        <div class="container">
            <h3 class="section-title">В рамках конференции</h3>
            <div class="at-conference-item-wrapper">
                <? $id = 7; // Идентификатор нужной рубрики
                $n = 3;   // Количество выводимых записей
                $recent = new WP_Query("cat=$id&showposts=$n");
                while ($recent->have_posts()): $recent->the_post();
                    ?>
                    <div class="at-conference-item">
                        <h4 style="color: #fff"><?php the_title(); ?></h4>
                        <p class="italic"><?php the_field('notice'); ?></p>
                        <hr>
                        <?php the_content(); ?>
                    </div>
                <? endwhile; ?>

            </div>
            <a href="#">
                <button class="btn">Учавствовать</button>
            </a>
        </div>
    </section>
<?php endif; ?>

<?php if ($redux_demo['blocks'][6] == true): ?>
    <section class="buy-tickets" id="buy-tickets">
    <div class="container">
    <h3 class="section-title">Купить билеты</h3>
    <div class="buy-tickets-item-wrapper">
    <? $id = 8; // Идентификатор нужной рубрики
    $n = 3;   // Количество выводимых записей
    $recent = new WP_Query("cat=$id&showposts=$n");
    while ($recent->have_posts()): $recent->the_post();
        ?>
        <div class="buy-tickets-item">
            <h4 style="color: #FFFFFF"><?php the_title(); ?></h4>
            <h5><?php the_field('price'); ?><br><span>руб</span></h5>
            <?php the_content(); ?>
            <div class="btn">Купить</div>
            <?php if (get_field('best')):?>
            <div class="best-advertisment">
                <img src=<?=get_template_directory_uri(). "/assets/img/part2/best-advertisment.svg";?>>
                <?="<p>".get_field('best')."</p>";?>
            </div>
            <?php endif;?>
        </div>

    <?php endwhile;?>
        </div>
        </div>
        </section>

        <?php endif ?>
<?php if ($redux_demo['blocks'][7] == true): ?>
    <section class="partners" id="partners">
        <div class="container">
            <h3 class="section-title">Партнеры</h3>
            <div class="partner-logo-wrapper">
    <? $id = 9; // Идентификатор нужной рубрики
    $n = 10;   // Количество выводимых записей
    $recent = new WP_Query("cat=$id&showposts=$n");
    while ($recent->have_posts()): $recent->the_post();
        ?>
                <a href=<?php the_field('ref')?>><div class="parner-logo"><img src=<?= get_the_post_thumbnail_url(); ?> alt=""></div></a>
<!--                <a href="#"><div class="parner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Coat_of_Arms_of_Benedictus_XVI.svg" alt=""></div></a>-->
<!--                <a href="#"><div class="parner-logo"><img src="img/part2/sevastopol.svg" alt=""></div></a>-->
<!--                <a href="#"><div class="parner-logo"><img src="img/part2/sevastopol.svg" alt=""></div></a>-->
<!--                <a href="#"><div class="parner-logo"><img src="img/part2/sevastopol.svg" alt=""></div></a>-->
<!--                <a href="#"><div class="parner-logo"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Coat_of_arms_of_the_British_Antarctic_Territory.svg" alt=""></div></a>-->
            <?php endwhile;?>
        </div>
        </div>
    </section>

<?php endif;?>

<footer class="footer" id="footer">
    <div class="container">
        <div class="sevsu-logo">
            <a href="http://sevsu.com"><img src=<?= $redux_demo['logo']['url']; ?> alt=""></a>
        </div>
        <div class="center-of-footer">
            <h2 style="color: #fff"><?=$redux_demo['name-conference']?></h2>
            <div class="social-media">
                <?php if($redux_demo['facebook']):?>
                    <a href=<?=$redux_demo['facebook']?>><img src=<?=get_template_directory_uri()."/assets/img/part2/facebook-logo.svg"?> alt=""></a>
                <?php endif;?>
                <?php if($redux_demo['vk']):?>
                    <a href=<?=$redux_demo['vk']?>><img src=<?=get_template_directory_uri()."/assets/img/part2/vk-logo.svg"?> alt=""></a>
                <?php endif;?>
                <?php if($redux_demo['instagram']):?>
                    <a href=<?=$redux_demo['instagram']?>><img src=<?=get_template_directory_uri()."/assets/img/part2/instagram-logo.svg"?> alt=""></a>
                <?php endif;?>
            </div>
        </div>
        <div class="contacts">
            <div class="contacts-text">
                <h5>Наши контакты</h5>
                <p><?=$redux_demo['adres']?><br>
                    <?=$redux_demo['email']?></p>
                <h5><?=$redux_demo['phone']?></h5>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
