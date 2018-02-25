/**
 * Created by bossl on 30.01.2018.
 */


$(document).ready(function(){
    $(".wraper").on("click","a.scroll", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();



        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});
$(document).ready(function(){
// menu
    $('.close_menu').click(function (){
        $('.wrap_menu').removeClass('open');
        $(this).parents('body').removeClass('open');
        $(this).parents('html').removeClass('open');
    });
    $('.menu-btn').click(function (e){
        $('.wrap_menu').toggleClass('open');
        e.preventDefault();
        $(this).parents('body').toggleClass('open');
        $(this).parents('html').toggleClass('open');
    });

    // menu
    $('.backward-sub').click(function (){
        $('.wrap_menu').removeClass('open-sub');
    });
    $('.sub-link').click(function (e){
        $('.wrap_menu').toggleClass('open-sub');
        e.preventDefault();
    });

});



(function($) {
    $(function() {

        $('ul.tabs_caption').on('click', 'li:not(.active)', function() {
            $(this)
                .addClass('active').siblings().removeClass('active')
                .closest('div.wrap_tabs').find('div.tabs_content').removeClass('active').eq($(this).index()).addClass('active');
        });

        var tabIndex = window.location.hash.replace('#tab','')-1;
        if (tabIndex != -1) $('ul.tabs_caption li').eq(tabIndex).click();

        $('a[href*=#tab]').click(function() {
            var tabIndex = $(this).attr('href').replace(/(.*)#tab/, '')-1;
            $('ul.tabs_caption li').eq(tabIndex).click();
        });

    });
})(jQuery);


$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 5,
        loop: true
    });


});