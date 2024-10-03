/****************************
 * Sticky Menu
 *****************************/
/*****************************
 * Commons Variables
 *****************************/
const $window = $(window),
    $body = $('body');


    $(window).on('scroll', function () {


        let scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".sticky-header").removeClass("sticky");
            $(".navbar-brand").removeClass("filter-white");

        } else {
            $(".sticky-header").addClass("sticky");
            $(".navbar-brand").addClass("filter-white");
        }


    });

    $(window).on('scroll', function () {

        let scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".seperate-sticky-bar").removeClass("sticky");
            $(".navbar-brand").removeClass("filter-white");
        } else {
            $(".seperate-sticky-bar").addClass("sticky");
            $(".navbar-brand").addClass("filter-white");

        }

    });

/************************************************
 * Modal Search
 ***********************************************/
// $('a[href="#search"]').on('click', function(event) {
//     event.preventDefault();
//     $('#search').addClass('open');
//     $('#search > form > input[type="search"]').focus();
// });

// $('#search, button').on('click', function(event) {
//     if ( event.target.className == 'close' ) {
//         $(this).removeClass('open');
//     }
// });

/*****************************
 * Off Canvas Function
 *****************************/
(function () {
    let $offCanvasToggle = $('.offcanvas-toggle'),
        $offCanvas = $('.offcanvas'),
        $offCanvasOverlay = $('.offcanvas-overlay'),
        $mobileMenuToggle = $('.mobile-menu-toggle');
    $offCanvasToggle.on('click', function (e) {
        e.preventDefault();
        let $this = $(this),
            $target = $this.attr('href');
        $body.addClass('offcanvas-open');
        $($target).addClass('offcanvas-open');
        $offCanvasOverlay.fadeIn();
        if ($this.parent().hasClass('mobile-menu-toggle')) {
            $this.addClass('close');
        }
    });
    $('.offcanvas-close, .offcanvas-overlay').on('click', function (e) {
        e.preventDefault();
        $body.removeClass('offcanvas-open');
        $offCanvas.removeClass('offcanvas-open');
        $offCanvasOverlay.fadeOut();
        $mobileMenuToggle.find('a').removeClass('close');
    });
})();

/**************************
 * Offcanvas: Menu Content
 **************************/
function mobileOffCanvasMenu() {
    let $offCanvasNav = $('.offcanvas-menu'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.mobile-sub-menu');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<div class="offcanvas-menu-expand"></div>');

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, .offcanvas-menu-expand', function (e) {
        let $this = $(this);
        if ($this.attr('href') === '#' || $this.hasClass('offcanvas-menu-expand')) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
                $this.parent('li').find('li').removeClass('active');
                $this.parent('li').find('ul:visible').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });
}

mobileOffCanvasMenu();
