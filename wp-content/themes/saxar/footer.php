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
        <a href="#" class="logo_footer"><img src="<?= get_template_directory_uri(); ?>/img/logo_saxar.png" alt=""/>
        </a>
        <div class="content_footer">
            <div class="left_foot">
                <div class="line_contacts">
                    <p>Адрес:</p>
                    <span>г. Краснодар ул. Зиповская 5 Литер Х</span>
                </div>
                <div class="line_contacts">
                    <p>Почта:</p>
                    <span>simple@gmail.com</span>
                </div>
                <div class="line_contacts">
                    <p>Телефон:</p>
                    <a href="#" class="phone_foot">+7 900 000 00 00</a>
                    <a href="#" class="phone_foot">+7 900 000 00 00</a>
                </div>
            </div>
            <ul class="foot_nav">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Залы</a></li>
                <li><a href="#">Зал Сахар</a></li>
                <li><a href="#">Зал Grey</a></li>
                <li><a href="#">Зал Лофт</a></li>
                <li><a href="#">Зал Пион</a></li>
                <li><a href="#">Бронирование</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <div class="soc">
                <span class="tittle_soc">Подпишись на нас:</span>
                <a href="#" class="insta"></a>
                <a href="#" class="vk"></a>
            </div>
        </div>
        <span class="copy">© 2018 Julia Dahina- Privacy policy</span>
    </div>
</div>
</div>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/swiper.js"></script>
<?php wp_footer(); ?>
</body>
</html>
