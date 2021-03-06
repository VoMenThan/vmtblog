! function() {
    "use strict";
    var e = $(window);
    e.on("load", function() {
        $("#loader").fadeOut("slow", function() {
            $("#preloader").delay(300).fadeOut("slow")
        })
    }), (new WOW).init(), $(document).ready(function() {
        function a(e) {
            $.fn.visible && $(e).visible() && !$(e).hasClass("animated") && ($(e).animateNumber({
                number: parseInt($(e).data("target"), 10)
            }, 2e3), $(e).addClass("animated"))
        }

        function o() {
            $(".fun-box").find(".value").each(function() {
                a(this)
            })
        }
        $(".nav").onePageNav({
            filter: ":not(.external)"
        }), $(".go-down a, .next").on("click", function(e) {
            e.preventDefault();
            var a = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(a).offset().top - 10
            }, 500)
        }), $(".navbar-collapse ul li a").on("click", function() {
            $(".navbar-toggle:visible").click()
        }), $(".full-height").height(e.height()), e.on("resize", function() {
            $(".full-height").height(e.height())
        }), e.on("scroll", function() {
            e.width() > 767 && $(this).scrollTop() > 1 ? $(".header nav").removeClass("navbar-expanded") : $(".header nav").addClass("navbar-expanded")
        }), $("#owl-slider").owlCarousel({
            nav: !0,
            loop: !0,
            autoplay: !0,
            margin: 0,
            navText: ["<a><span></span></a>", "<a><span></span></a>"],
            responsive: {
                0: {
                    items: 1,
                    dots: !1
                },
                600: {
                    items: 1,
                    dots: !1
                },
                1e3: {
                    items: 1
                }
            }
        }), $("#testimonial-list").owlCarousel({
            autoplay: !0,
            loop: !0,
            items: 1,
            navigation: !0,
            pagination: !1,
            itemsDesktop: [1e3, 3],
            itemsDesktopSmall: [900, 2],
            itemsTablet: [600, 2],
            itemsMobile: [479, 1]
        }), "function" == typeof Typist && new Typist(document.querySelector(".typist-text"), {
            letterInterval: 60,
            textInterval: 3e3
        }), o(), e.on("scroll", function() {
            o()
        }), $(".portfolio-gallery").each(function() {
            $(this).find(".popup-gallery").magnificPopup({
                type: "image",
                gallery: {
                    enabled: !0
                }
            })
        }), $("body").append('<a id="go-top" data-scroll class="go-top-hide" href="#"><i class="fa fa-long-arrow-up"></i></a>');
        var t = $("#go-top");
        e.on("scroll", function() {
            $(this).scrollTop() > 250 ? t.addClass("go-top-show").removeClass("go-top-hide") : t.addClass("go-top-hide").removeClass("go-top-show")
        }), t.on("click", function(e) {
            e.preventDefault(), $("html,body").animate({
                scrollTop: 0
            }, 400)
        })
    })
}(jQuery);