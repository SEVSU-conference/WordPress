<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edu
 */

?>
<?php
    get_header();
    global $redux_demo;
    ?>
    <section class="start-page" id="start-page">
        <div class="container">
            <div class="start-page-text">
                <h3><?echo $redux_demo['date-conference'];?></h3>
                <h3><?echo $redux_demo['place-conference'];?></h3>
                <h1><?echo $redux_demo['type-conference'];?></h1>
                <p>2020</p>
                <h2><?echo $redux_demo['name-conference'];?></h2>
                <h4><?echo $redux_demo['description-conference'];?></h4>
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
                    <p><span><?echo $redux_demo['block1-conference'];?></span></p>
                </div>
                <div class="inkblot">
                    <img src=<?echo get_template_directory_uri()."/assets/img/inkblot2.svg"?>  alt="Фон">
                    <p><span>12</span><br>спикеров</p>
                </div>
                <div class="inkblot">
                    <img src=<?echo get_template_directory_uri()."/assets/img/inkblot3.svg"?>  alt="Фон">
                    <p><span>40+</span><br>тем</p>
                </div>
            </div>
        </div>
    </section>
    <section class="description">
        <div class="description-text">
            <h5>EDU Крым Объединит в Севастополе лучший опыт и усилия преподавателей, менеджеров, инвесторов, образовательных компаний и технологических инноваторов.</h5>
            <p>Мероприятие организованно для продвижения творчества и социальных изменений в области высшего и профессионального образования без противопоставления онлайн- и оффлайн- технологий с целью удовлетворения образовательных потребностей и карьерных целей учащихся.</p>
        </div>
        <div class="description-image"></div>
    </section>
    <section class="main-tracks">
        <h3>Основные треки</h3>

        <div class="container">
            <div class="track">
                <div class="track-icon">
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon-bg1.svg"?> >
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon1.svg"?> alt="Иконка трека">
                </div>
                <div class="track-text">
                    <h5>Онлайн-обучение</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                </div>
            </div>
            <div class="track">
                <div class="track-icon">
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon-bg2.svg"?>>
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon2.svg"?> alt="Иконка трека">
                </div>
                <div class="track-text">
                    <h5>Технологическое предпринимательство</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
            </div>
            <div class="track">
                <div class="track-icon">
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon-bg3.svg"?>>
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon3.svg"?> alt="Иконка трека">
                </div>
                <div class="track-text">
                    <h5>Управление проектами на основе данных CDO</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
            </div>
            <div class="track">
                <div class="track-icon">
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon-bg4.svg"?>>
                    <img src=<?echo get_template_directory_uri()."/assets/img/track-icon4.svg"?> alt="Иконка трека">
                </div>
                <div class="track-text">
                    <h5>Управление образовательными процессами на основе данных</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="speakers">
        <div class="container">
            <h3>Спикеры</h3>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-text">
                        <h4>Владимир Нечаев</h4>
                        <hr>
                        <p>Ректор Севастопольского государственного университета</p>
                    </div>
                    <img src=<?echo get_template_directory_uri()."/assets/img/speaker1.png"?> alt="Спикер">
                </div>

                <div class="item">
                    <div class="item-text">
                        <h4>Владимир Нечаев</h4>
                        <hr>
                        <p>Ректор Севастопольского государственного университета</p>
                    </div>
                    <img src=<?echo get_template_directory_uri()."/assets/img/speaker2.png"?> alt="Спикер">
                </div>

                <div class="item">
                    <div class="item-text">
                        <h4>Владимир Нечаев</h4>
                        <hr>
                        <p>Ректор Севастопольского государственного университета</p>
                    </div>
                    <img src=<?echo get_template_directory_uri()."/assets/img/speaker3.png"?> alt="Спикер">
                </div>

                <div class="item">
                    <div class="item-text">
                        <h4>Владимир Нечаев</h4>
                        <hr>
                        <p>Ректор Севастопольского государственного университета</p>
                    </div>
                    <img src=<?echo get_template_directory_uri()."/assets/img/speaker4.png"?> alt="Спикер">
                </div>

                <!-- для тестирования owl-carousel -->
                <div class="item">
                    <div class="item-text">
                        <h4>Владимир Нечаев</h4>
                        <hr>
                        <p>Ректор Севастопольского государственного университета</p>
                    </div>
                    <img src=<?echo get_template_directory_uri()."/assets/img/speaker4.png"?> alt="Спикер">
                </div>
            </div>
        </div>
    </section>



<?php

get_footer();