<?php
/**
 * Template Name: dates
 */
get_header(); ?>
<div class="block5">
    <div>
        <span class="tittle_block5"><?php the_title(); ?></span>
        <div class="content_dates">
            <iframe id='fhesus43345' src='https://hesus.ru/hesus/visor/id/3345' style='width: 100%;height:913px;margin: 0 auto;display: block;' frameborder=0 marginheight=0 marginwidth=0>
            </iframe>
        </div>
        <div class="foot_dates">
            <span class="tittl_fd"><?php the_field('b_title')?></span>
            <?php the_field('b_desc')?>
            <a href="<?php the_field('b_button_link')?>" class="br_list"><?php the_field('b_button_text')?></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
