<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saxar
 */

?>
<div class="footer">
    <div>
        <a href="#" class="logo_footer"><img src="<?php the_field('footer_logo', 'option'); ?>" alt=""/>
        </a>
        <div class="content_footer">
            <div class="left_foot">
                <div class="line_contacts">
                    <p><?php the_field('footer_title_1', 'option'); ?></p>
                    <span><?php the_field('footer_subtitle_1', 'option'); ?></span>
                </div>
                <div class="line_contacts">
                    <p><?php the_field('footer_title_2', 'option'); ?></p>
                    <span><?php the_field('footer_subtitle_2', 'option'); ?></span>
                </div>
                <div class="line_contacts">
                    <p><?php the_field('footer_title_3', 'option'); ?></p>
                    <a href="<?php the_field('footer_link_1', 'option'); ?>" class="phone_foot"><?php the_field('footer_link_1_text', 'option'); ?></a>
                    <a href="<?php the_field('footer_link_2', 'option'); ?>" class="phone_foot"><?php the_field('footer_link_2_text', 'option'); ?></a>
                </div>
            </div>
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'menu-1',
                'menu'            => '',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="foot_nav">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) );
            ?>
            <div class="soc">
                <span class="tittle_soc"><?php the_field('footer_subscribe_text', 'option'); ?></span>
                <a target="_blank" href="<?php the_field('inst_link', 'option'); ?>" class="insta"></a>
                <a target="_blank" href="<?php the_field('vk_link', 'option'); ?>" class="vk"></a>
            </div>
        </div>
        <span class="copy"><?php the_field('footer_copyright', 'option'); ?></span>
    </div>
</div>
</div>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/swiper.js"></script>
<?php wp_footer(); ?>
</body>
</html>
