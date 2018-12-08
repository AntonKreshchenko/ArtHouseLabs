// header menu
$('.menu-btn').click(function(e) {
    e.preventDefault;
    $(this).toggleClass('menu-btn_active');
    $('.header-nav').toggleClass('header-nav_active');
});