<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saxar
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Зал Лофт</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="<?= get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery.fancybox.css">
</head>
<body>
<!--menu-->
<div class="wrap_menu">
    <div class="container-wrap_menu">
        <button class="close_menu"><img src="<?= get_template_directory_uri(); ?>/img/x.png" alt=""/> </button>
        <button class="backward-sub"><img src="<?= get_template_directory_uri(); ?>/img/back.png" alt=""/> </button>
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


<div class="wraper">
    <div class="header header_inside <?php if(get_the_ID() == 43) { ?>header_loft<?php } ?>">
        <div class="empty">
            <div class="wrap_head">
                <a href="#" class="logo"><img src="<?= get_template_directory_uri(); ?>/img/logowhite/logo_saxar.png" alt=""/> </a>
                <div class="right_head">
                    <a href="tel:+79531013455" class="phone">+7 953 101 34 55</a>
                    <a href="#" class="bron">БРОНИРОВАТЬ</a>
                    <span class="burger menu-btn"><img src="<?= get_template_directory_uri(); ?>/img/burgerwhite.png" alt=""/> </span>
                </div>
            </div>
        </div>
    </div>
    <div class="block_mob_sec">
        <div>
            <span>Зал Сахар</span>
            <a class="scroll" href="#id3">К интерьеру</a>
        </div>
    </div>