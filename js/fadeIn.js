$(document).ready(function () {
    fade();

    $(window).scroll(function () {
        fade();
    });
});

function fade() {
    $(".fade").each(function () {
        var top_of_element = $(this).offset().top;
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();

        if ((bottom_of_screen > top_of_element)
            && (top_of_screen < bottom_of_element)
            && $(this).css("visibility") !== "visible") {
            const elem = $(this);
            if ($(this).attr("fade-delay")) {
                setTimeout(function () {
                    elem.css("visibility", "visible");
                    elem.css("animation-name", elem.attr("fade"));

                    if (elem.find(".counter")) {
                        counter(elem.find(".counter"));
                    }
                }, Number(elem.attr("fade-delay")))
            } else {
                $(this).css("animation-name", elem.attr("fade"));
                $(this).css("visibility", "visible");
                if ($(this).find(".counter")) {
                    counter($(this).find(".counter"));
                }
            }

        }
    });
}