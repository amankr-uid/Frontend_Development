/* ==================================================
  * Template: Jalao
  * Version:  2
  * Date:     29/12/2020
===================================================== */

/*==================================================*/
/* [Table of contents] */
/*==================================================*/

/*	
    1. PRELOADER
    2. SCROLL TOP
    3. COUNTER
    4. MAGNIFIC POPUP GALLERY
    5. YOUTUBE POPUP
    6. FILTER GALLERY
    7. MASONRY GALLERY
    8. FAQ ACCORDION
    9. ANIMATION
    10. VIDEO POPUP
    11. SLIDER
*/

/* ===============================================
    Functions Call
=============================================== */

jQuery(document).ready(function () {
    "use strict";

    // here all ready functions

    loader();
    scroll_top();
    magnific_popup();
    accordion();

});

/* ===============================================
    1. PRELOADER
=============================================== */
function loader() {
    "use strict";
    setTimeout(function () {
        $('#loader-wrapper').fadeOut();
    }, 1500);
};

/* ===============================================
    2. SCROLL TOP
=============================================== */
function scroll_top() {
    "use strict";
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 700,
        $back_to_top = $('.cd-top');

    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration);
    });

};

/* ===============================================
    3. COUNTER
=============================================== */
$('.counter').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');
    $({
        countNum: $this.text()
    }).animate({
            countNum: countTo
        },

        {
            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
                //alert('finished');
            }

        });
});

/* ===============================================
    4. MAGNIFIC POPUP GALLERY
=============================================== */
function magnific_popup() {
    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            opener: function (openerElement) {

                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
};

/* ===============================================
    5. YOUTUBE POPUP
=============================================== */
function video_popup() {
    var $btnLoadMore = $(
        '<div class="btn-wrapper text-center"><a href="#" class="btn load-more">Load More</a></div>'
    );
    var items = $(".youtube-popup[data-listnum]");
    var count = items.length;
    var slice = 2;
    var current = 0;

    if (items.length > slice) {
        //bind load more event
        $btnLoadMore.on("click", function (e) {
            e.preventDefault();
            loadMoreNews();
        });
        //append load more button
        items.closest(".salvattore-grid").after($btnLoadMore);
    }

    function getItem(listnum) {
        return items
            .filter(function (index) {
                if ($(this).attr("data-listnum") == listnum) {
                    return true;
                }
            });
    }

    function loadMoreNews() {
        var end = current + slice;
        if (end >= count) {
            end = count;
            $btnLoadMore.hide();
        }
        while (current < end) {
            var listnum = current + 1; //data-listnum : 1-based
            var item = getItem(listnum);
            if (item) {
                item.fadeIn();
            }
            current++;
        }
    }

    //youtube popup
    $(".popup-youtube").magnificPopup({
        type: "iframe",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                "</div>",
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0"
                }
            },
            srcAction: "iframe_src"
        }
    });

    //init load
    loadMoreNews();
};

/* ===============================================
    6. FILTER GALLERY
=============================================== */
$(function () {
    var $margin = $("#kehl-grid").isotope({
        itemSelector: ".grid-box",
        // Different transition duration
        transitionDuration: "0.5s"
    });

    // on filter button click
    $(".filter-container li").click(function (e) {
        var $this = $(this);

        // Prevent default behaviour
        e.preventDefault();
        $('.filter li').removeClass('active');
        $this.addClass('active');

        // Get the filter data attribute from the button
        var $filter = $this.attr("data-filter");

        // filter
        $margin.isotope({
            filter: $filter
        });
    });
});

/* ===============================================
    7. MASONRY GALLERY
=============================================== */
var $grid = $('.grid').imagesLoaded(function () {
    $grid.masonry({
        itemSelector: '.grid-box',
        percentPosition: true,
        columnWidth: '.grid-sizer'
    });
});

/* ===============================================
    8. FAQ ACCORDION
=============================================== */
function accordion() {};
$('.accordion > li:eq(0) a').addClass('active').next().slideDown();

$('.accordion a').click(function (j) {
    var dropDown = $(this).closest('li').find('p');

    $(this).closest('.accordion').find('p').not(dropDown).slideUp();

    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
    } else {
        $(this).closest('.accordion').find('a.active').removeClass('active');
        $(this).addClass('active');
    }

    dropDown.stop(false, true).slideToggle();

    j.preventDefault();
});
(jQuery)

/* ===============================================
    9. ANIMATION
=============================================== */
AOS.init({
    duration: 1200,
})

/* ===============================================
    10. VIDEO POPUP
=============================================== */
$('.popup-youtube, .popup-vimeo').magnificPopup({
    type: 'iframe',
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    markup: '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
    iframe: {
        patterns: {
            youtube: {
                index: 'youtube.com/',
                id: 'v=',
                src: 'https://www.youtube.com/embed/%id%?autoplay=1'
            }
        }
    }
});

/* ===============================================
    11. CLIENT CAROUSEL
=============================================== */
$('.clients-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.clients-carousel .custom-nav',
    responsive: {
        0: {
            items: 2
        },
        576 : {
            items: 3
        },
        767 : {
         items: 4
        },
        1200: {
            items: 5
        }
    }
});

/* ===============================================
    12. TEAM CAROUSEL
=============================================== */
$('.team-carousel .owl-carousel').owlCarousel({
    autoplay: false,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    center: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.team-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    13. BLOG NEWS CAROUSEL
=============================================== */
$('.blog-news-carousel .owl-carousel').owlCarousel({
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.blog-news-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});


/* ===============================================
    14. HOME SERVICES CAROUSEL
=============================================== */
$('.bs-carousel .owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.bs-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

/* ===============================================
    15. GALLERY CAROUSEL
=============================================== */

$('.gallery-carousel .owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 3500,
    autoplayHoverPause: false,
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.gallery-carousel .custom-nav',
    responsive: {
        100: {
            items: 1
        }
    }
});

/* ===============================================
    15. FRONT CAROUSEL
=============================================== */
$('.front-carousel .owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause:true,
    stagePadding: 0,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.front-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 2
        },
        1000: {
            items: 5
        }
    }
});

/* ===============================================
    16. RESTAURANT
=============================================== */
$('.restaurant-carousel .owl-carousel').owlCarousel({
    autoplay:false,
    autoplayTimeout: 2500,
    autoplayHoverPause:false,
    loop: true,
    dots: true,
    margin: 0,
    nav: true,
    center: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    navContainer: '.restaurant-carousel .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        650: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});