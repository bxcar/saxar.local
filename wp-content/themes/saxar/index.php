<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saxar
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="<?= get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/swiper.css">
    <?php wp_head(); ?>
</head>
<body>
<!--menu-->
<div class="wrap_fon">
</div>
<div class="wrap_menu">
    <div class="container-wrap_menu">
        <button class="close_menu"><img src="<?= get_template_directory_uri(); ?>/img/x.png" alt=""/></button>
        <button class="backward-sub"><img src="<?= get_template_directory_uri(); ?>/img/back.png" alt=""/></button>
        <div class="menu">
            <ul class="list-menu">
                <li><a href="#">Главная</a></li>
                <li class="sub-link">
                    <a href="#">Залы</a>
                </li>
                <li><a href="#">Бронирование</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <ul class="sub-menu">
                <li><a href="#">зал 4</a></li>
                <li><a href="#">зал 3</a></li>
                <li><a href="#">зал 2</a></li>
                <li><a href="#">зал 1</a></li>
            </ul>
        </div>
        <div class="soc">
            <a href="#" class="insta"></a>
            <a href="#" class="vk"></a>
        </div>
    </div>
</div>
<div class="wraper wrapper_icon">
    <div class="header">
        <div class="empty">
            <div class="wrap_head">
                <a href="#" class="logo"><img src="<?= get_template_directory_uri(); ?>/img/logo_saxar.png" alt=""/>
                </a>
                <div class="right_head">
                    <a href="tel:+79531013455" class="phone">+7 953 101 34 55</a>
                    <a href="#" class="bron">БРОНИРОВАТЬ</a>
                    <span class="burger menu-btn"><img src="<?= get_template_directory_uri(); ?>/img/burger.png"
                                                       alt=""/> </span>
                </div>
            </div>
        </div>
    </div>
    <div class="block_content">
        <div>
            <div class="top">
                <div class="text_top">
                    <h1>
                        <div class="blue"><?php the_field('title'); ?></div>
                        <div class="blue"><?php the_field('subtitle'); ?></div>
                        <?php the_field('subtitle_2'); ?>
                    </h1>
                    <a href="<?php the_field('button_link'); ?>" class="look_all scroll"><?php the_field('button_text'); ?></a>
                </div>
            </div>
            <h2 id="id1"><?php the_field('2_title'); ?></h2>
            <div class="line_blue"></div>
            <h3><?php the_field('2_text_under_title'); ?></h3>
                <div class="wrap_hall" id="id1">
                    <a href="#" class="hall">
                        <span class="hall_photo"><img src="<?php the_field('2_image_1'); ?>"
                                                      alt=""/> </span>
                    </a>
                    <span class="hall">
                        <span class="name_hall"><?php the_field('2_title_for_image_1'); ?></span>
                        <span class="name_hall name_hall_t"><?php the_field('2_desc_for_image_1'); ?></span>
                        <span class="name_hall hall_button_b"><a href="<?php the_field('2_button_link_for_image_1'); ?>"><?php the_field('2_button_text_for_image_1'); ?></a></span>
                    </span>
                    <span class="hall scren_display">
                        <span class="name_hall"><?php the_field('2_title_for_image_2'); ?></span>
                        <span class="name_hall name_hall_t"><?php the_field('2_desc_for_image_2'); ?></span>
                        <span class="name_hall hall_button_b"><a href="<?php the_field('2_button_link_for_image_2'); ?>"><?php the_field('2_button_text_for_image_2'); ?></a></span>
                    </span>
                    <a href="#" class="hall">
                        <span class="hall_photo"><img src="<?php the_field('2_image_2'); ?>"
                                                      alt=""/> </span>
                    </a>
                    <span class="hall scren_display_of">
                        <span class="name_hall"><?php the_field('2_title_for_image_2'); ?></span>
                        <span class="name_hall name_hall_t"><?php the_field('2_desc_for_image_2'); ?></span>
                        <span class="name_hall hall_button_b"><a href="<?php the_field('2_button_link_for_image_2'); ?>"><?php the_field('2_button_text_for_image_2'); ?></a></span>
                    </span>
                </div>
        </div>
    </div>
    <div class="block1">
        <div>
            <div class="wrap_light">
                <span class="tittle_light"><?php the_field('3_text_above_title'); ?> </span>
                <span class="light_name"><?php the_field('3_title'); ?></span>
                <div class="line_blue second_line"></div>
                <p><?php the_field('3_desc'); ?></p>
            </div>
        </div>
    </div>
    <style>
        .block1{
            background: url("<?php the_field('3_background_image'); ?>") no-repeat top right;
        }

        @media (min-width:320px) and (max-width:1023px) {
            .block1 {
                margin-top: 50px;
                padding-bottom: 0;
                background: url("<?php the_field('3_background_image_for_mobile'); ?>") no-repeat top right;
            }
        }
    </style>
<?php get_footer(); ?>
