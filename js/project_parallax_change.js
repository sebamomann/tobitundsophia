$(function () {
    var last;
    var parent;
    var id;

    var delay = 333, setTimeoutConst;

    $(".project").on({
        mouseenter: function () {
            id = $(this).attr('id');
            parent = $(this).parent().parent().parent();

            $(this).parent().find(".project").each(function () {
                $(this).removeClass("active");
            });

            var presentation = $(document).find(".project-presentation-wrapper");
            var imageWrapper = $(document).find(".project-details-wrapper");
            var statisticsWrapper = $(document).find(".project-statistics-wrapper");

            setTimeoutConst = setTimeout(function () {
                if (id !== last) {
                    last = id;

                    var title = $(document).find("#" + id + " figurebody a h2").html();
                    var description = $(document).find("#" + id + " figurebody p").html();
                    var stats = $(document).find("#" + id + " .stats").html();

                    imageWrapper.css("opacity", "0");
                    statisticsWrapper.css("opacity", "0");

                    setTimeout(function () {
                        var direction = "to right";
                        if ($(window).width() < 720) {
                            direction = "to bottom";
                        }

                        imageWrapper.css("background-image", "linear-gradient(" + direction + ", rgba(0,0,0,0.6) 40%, black), url(img/project_parallax/" + id + ".jpg)");

                        presentation.find(".project-details .title").html(title);
                        presentation.find(".project-details .description").html(description);
                        presentation.find(".project-statistics .statistics").html(stats ? stats : "");

                        /** remove for fade animation */
                        presentation.find(".transformation-wrapper").removeAttr("style");
                        fade();
                    }, 500);

                    setTimeout(function () {
                        imageWrapper.css("opacity", "1");
                        statisticsWrapper.css("opacity", "1");
                        presentation.find(".statistics .counter")
                            .each(function () {
                                counter($(this));
                            })
                    }, 500);
                }
            }, delay);
        },
        mouseleave: function () {
            clearTimeout(setTimeoutConst);
            $(this).addClass("active");
        }
    });
});
