<?php
/**
 * Template Name: loft
 */
get_header(); ?>
<div class="block3">
    <div>
        <div class="top_halls">
            <div class="top_halls_t">
                <span class="tittle_top_halls"><?php the_title(); ?></span>
                <a href="#" class="hall_bron">Забронировать</a>
            </div>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="block4" id="id3">
    <div>
        <div class="describe_text_hall">
            <div class="left_th">
                <div class="line_th">
                    <div class="text_th">
                        <span><?php the_field('1_title_1'); ?> </span>
                        <p><?php the_field('1_subtitle_1'); ?></p>
                    </div>
                    <div class="text_th">
                        <span><?php the_field('1_title_2'); ?></span>
                        <p><?php the_field('1_subtitle_2'); ?></p>
                    </div>
                </div>
                <div class="line_th">
                    <div class="text_th">
                        <span><?php the_field('1_title_3'); ?></span>
                        <p><?php the_field('1_subtitle_3'); ?></p>
                    </div>
                    <div class="text_th">
                        <span><?php the_field('1_title_4'); ?></span>
                        <p><?php the_field('1_subtitle_4'); ?></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="wrap_tabs">
            <ul class="tabs_caption">
                <li class="active"><?php the_field('2_title_1'); ?></li>
                <li><?php the_field('2_title_2'); ?> </li>
                <li><?php the_field('2_title_3'); ?></li>
                <li><?php the_field('2_title_4'); ?></li>
            </ul>
            <div class="wr_tabs">
                <div class="tabs_content active">
                    <?php
                    $gallery = get_field('3_gallery_1');
                    foreach ($gallery as $photo) { ?>
                        <a href="<?= $photo['url']; ?>" data-fancybox="images" data-caption="<?= $photo['caption']; ?>">
                            <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>"/>
                        </a>
                    <?php } ?>
                </div>
                <div class="tabs_content">
                    <?php
                    $gallery = get_field('3_gallery_2');
                    foreach ($gallery as $photo) { ?>
                        <a href="<?= $photo['url']; ?>" data-fancybox="images" data-caption="<?= $photo['caption']; ?>">
                            <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>"/>
                        </a>
                    <?php } ?>
                </div>
                <div class="tabs_content">
                    <?php
                    $gallery = get_field('3_gallery_3');
                    foreach ($gallery as $photo) { ?>
                        <a href="<?= $photo['url']; ?>" data-fancybox="images" data-caption="<?= $photo['caption']; ?>">
                            <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>"/>
                        </a>
                    <?php } ?>
                </div>
                <div class="tabs_content">
                    <?php
                    $gallery = get_field('3_gallery_4');
                    foreach ($gallery as $photo) { ?>
                        <a href="<?= $photo['url']; ?>" data-fancybox="images" data-caption="<?= $photo['caption']; ?>">
                            <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>"/>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="foot_block4">
            <span class="tittle_block4"><?php the_field('4_title'); ?></span>
            <span class="head_bl4"><?php the_field('4_subtitle'); ?></span>
            <div class="content_bl4">
                <a href="<?php the_field('4_left_button_link'); ?>" class="how_to_road"><?php the_field('4_left_button_text'); ?></a>
                <a href="<?php the_field('4_right_button_link'); ?>" class="to_bron"><?php the_field('4_right_button_text'); ?></a>
            </div>
        </div>
    </div>
</div>
<script>
    // fixed header
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 101) {
            jQuery('.top_halls').addClass("sticky");
        }
        else {
            jQuery('.top_halls').removeClass("sticky");
        }
    });
</script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<?php get_footer(); ?>
