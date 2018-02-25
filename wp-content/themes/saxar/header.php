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
            <?php
            echo str_replace('menu-item-has-children', 'sub-link', wp_nav_menu( array(
                'theme_location'  => 'menu-1',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => false,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="list-menu">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            )));
            ?>
        </div>
        <div class="soc">

            <a target="_blank" href="<?php the_field('inst_link', 'option'); ?>" class="insta"></a>
            <a target="_blank" href="<?php the_field('vk_link', 'option'); ?>" class="vk"></a>
        </div>
    </div>
</div>


<div class="wraper">
    <div class="header header_inside <?php if(get_the_ID() == 43) { ?>header_loft<?php } ?>">
        <div class="empty">
            <div class="wrap_head">
                <a href="#" class="logo"><img src="<?php the_field('logo', 'option'); ?>" alt=""/> </a>
                <div class="right_head">
                    <a href="tel:<?php the_field('header_phone_format', 'option'); ?>" class="phone"><?php the_field('header_phone', 'option'); ?></a>
                    <a href="<?php the_field('header_link', 'option'); ?>" class="bron"><?php the_field('header_link_text', 'option'); ?></a>
                    <span class="burger menu-btn"><img src="<?= get_template_directory_uri(); ?>/img/burgerwhite.png" alt=""/> </span>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery( ".burger.menu-btn" ).click(function() {
            var sub_menu = jQuery('.list-menu .sub-menu');
            jQuery('.wrap_menu .menu').append(sub_menu);
        });
    </script>
    <div class="block_mob_sec">
        <div>
            <span>Зал Сахар</span>
            <a class="scroll" href="#id3">К интерьеру</a>
        </div>
    </div>