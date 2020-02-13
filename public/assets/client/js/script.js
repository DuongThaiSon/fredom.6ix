$(document).ready(function () {

    //aos
    AOS.init();

    //search
    var searchShow = function () {
        var searchWrap = $('.search-wrap');
        $('.js-search-open').on('click', function (e) {
            e.preventDefault();
            searchWrap.addClass('active');
            setTimeout(function () {
                searchWrap.find('.form-control').focus();
            }, 300);
        });
        $('.js-search-close').on('click', function (e) {
            e.preventDefault();
            searchWrap.removeClass('active');
        })
    };
    searchShow();

    //mobile menu
    $('.js-show--menu').click(function () {
        $('body').toggleClass('is-collapsed-mobile');
    })
    $('.js-close--menu').click(function () {
        $('body').removeClass('is-collapsed-mobile');
    })

    $(document).mouseup(function (e) {
        var container = $(".site-navbar");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('is-collapsed-mobile')) {
                $('body').removeClass('is-collapsed-mobile');
            }
        }
    });

    //promo
    $('.marquee').marquee();
    $('.js-close--promo').click(function () {
        $('.promo').addClass('d-none');
    })


    //banner slide
    $('#banner').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: true,
        dots: false,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })

    //collection slide
    $('#collection').owlCarousel({
        loop: true,
        // autoplay:true,
        responsiveClass: true,
        nav: true,
        dots: false,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })

    //intro slide
    $('#intro').owlCarousel({
        loop: true,
        // autoplay:true,
        responsiveClass: true,
        nav: true,
        dots: false,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })
})
