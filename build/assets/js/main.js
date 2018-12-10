// header menu
$('.menu-btn').click(function(e) {
    e.preventDefault;
    $(this).toggleClass('menu-btn_active');
    $('.header-nav').toggleClass('header-nav_active');
});

//anchors scroll
var $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
});