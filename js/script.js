$(document).ready(function () {
    if ($(document).width() > 768) {
        const navOffset = $('nav.menu').offset().top;
        $(window).scroll(function () {
            const scrolled = $(this).scrollTop();

            if (scrolled > navOffset) {
                $('nav.menu').addClass('fixed');
                $('header').addClass('margin-bottom');
            } else if (scrolled < navOffset) {
                $('nav.menu').removeClass('fixed');
                $('header').removeClass('margin-bottom');
            }
        });
    }
    $('.header-burger').click(function () {
        $('nav.mobile-menu,.header-burger').toggleClass('active');
    });
    $('.mobile-search-exit').click(function () {
        $('.mobile-header-search-form').removeClass('active');
    });
    $('.mobile-header-search').click(function () {
        $('.mobile-header-search-form').toggleClass('active');
    });
});
