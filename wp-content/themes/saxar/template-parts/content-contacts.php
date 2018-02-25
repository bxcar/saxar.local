<?php
/**
 * Template Name: contacts
 */
get_header(); ?>
<div class="block6">
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9ac6ce1ee9b88abb757fa717ccb8557789ae812fdd444be5671cea3e2b4006de&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
<div class="block7">
    <div>
        <div class="content_plashka">
            <div class="line_plashka">
                <span class="tittle_plashka"><?php the_field('1_title_1'); ?></span>
                <a class="plashka_phone" href="<?php the_field('1_link_1'); ?>"><?php the_field('1_link_1_title'); ?></a>
                <a class="plashka_phone" href="<?php the_field('1_link_2'); ?>"><?php the_field('1_link_2_title'); ?></a>
            </div>
            <div class="line_plashka">
                <span class="tittle_plashka"><?php the_field('1_title_2'); ?></span>
                <p><?php the_field('1_text_under_2_title'); ?></p>
            </div>
            <div class="line_plashka">
                <span class="tittle_plashka"><?php the_field('1_title_3'); ?></span>
                <a class="plashka_phone" href="mailto:<?php the_field('1_text_under_3_title'); ?>"><?php the_field('1_text_under_3_title'); ?></a>
            </div>
            <div class="soc_plashka">
                <a href="#" class="insta"></a>
                <a href="#" class="vk"></a>
            </div>
        </div>
    </div>
</div>
<div class="map_mobile">
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9ac6ce1ee9b88abb757fa717ccb8557789ae812fdd444be5671cea3e2b4006de&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
</div>
<div class="block8">
    <div class="empty">
        <div class="content_block8">
            <div class="line8">
                <span><?php the_field('2_title_1'); ?></span>
                <p><?php the_field('2_subtitle_1'); ?></p>
            </div>
            <div class="line8">
                <span><?php the_field('2_title_2'); ?></span>
                <p><?php the_field('2_subtitle_2'); ?></p>
            </div>
            <a href="<?php the_field('2_link'); ?>" class="prodl"><?php the_field('2_link_text'); ?></a>
        </div>
    </div>
</div>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<?php get_footer(); ?>
