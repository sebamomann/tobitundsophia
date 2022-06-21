<!DOCTYPE html>
<html lang="DE">

<!-- DOTO SITEMAP -->

<head>
    <title>Hochzeit von Tobit und Sophia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="Seba Momann, Sebastian Momann, sebamomann">
    <meta name="owner" content="Seba Momann, Sebastian Momann, sebamomann">
    <meta name="description" content="Informationsseite für die Hochzeit von Tobit und Sophia Hartmann">
    <meta name="page-type" content="blog, profile, overview, project-list">
    <meta name="revisit-after" content="7 days">
    <meta property="og:title" content="Hochzeit von Tobit und Sophia">
    <meta property="og:description" content="Informationsseite für die Hochzeit von Tobit und Sophia Hartmann">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon.ico" />
    <link rel="canonical" href="https://tobitundsophia.de/">
    <link rel="stylesheet" href="style.css?v=4.1">
    <script src="js/jquery.min.js"></script>
    <script src="js/fadeIn.js?v2.1"></script>
    <script src="js/count.js?v2.1"></script>
    <script src="js/project_parallax_change.js?v2.1"></script>
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//matomo.sebamomann.de/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '2']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

    <!-- TODO DIFFERENT SOLUTION FOR IMPRESSUM SNAP -->
    <script>
        if (location.hash) {
            setTimeout(function() {

                window.scrollTo(0, 0);
            }, 1);
        }

        $('html').css("scroll-snap-type", "none");
        $('body').css("scroll-snap-type", "none");


        $(document).ready(function() {
            $(function() {
                $(document).scroll(function() {
                    var currentHash = window.location.hash.substr(1);
                    $('.segment').each(function() {
                        var top = window.pageYOffset;
                        var distance = top - $(this).offset().top;
                        var hash = $(this).attr('id');
                        // 30 is an arbitrary padding choice, 
                        // if you want a precise check then use distance===0
                        if (distance < 30 && distance > -30 && currentHash != hash) {
                            window.location.hash = (hash);
                            currentHash = hash;

                            $("[nav=" + hash + "]").parent().find("div").removeClass("active");
                            $("[nav=" + hash + "]").addClass("active");
                        }
                    });
                });
            });

            var hash = window.location.hash.substr(1);
            console.log($("#" + hash).offset().top);
            $('html, body').animate({
                scrollTop: $("#" + hash).offset().top
            }, 1500);

            setTimeout(function() {
                $('body').css("scroll-snap-type", "y proximity")
                $('html').css("scroll-snap-type", "y proximity")
            }, 1500)

            $("[nav=" + hash + "]").addClass("active");


            $(".nav-element").on("click", function(event) {
                $('html').css("scroll-snap-type", "none");
                $('body').css("scroll-snap-type", "none");

                var hash = $(this).attr("nav");
                console.log(hash);
                $('html, body').animate({
                    scrollTop: $("#" + hash).offset().top
                }, 1500);

                setTimeout(function() {
                    $('body').css("scroll-snap-type", "y proximity")
                    $('html').css("scroll-snap-type", "y proximity")
                }, 1500)
            })
        })
    </script>

    <script>
        $(function() {
            var curDown = false,
                curPos = 0;
            curYPos = 0,
                curXPos = 0;

            $('.project-wrapper').mousemove(function(m) {
                if (curDown) {
                    $('.project-wrapper').scrollLeft(curXPos - m.pageX)
                }
            });

            $('.project-wrapper').mousedown(function(m) {
                curYPos = m.pageY;
                curXPos = m.pageX;
                curDown = true;
            });

            $('.project-wrapper').mouseup(function() {
                curDown = false;
            });
        })
    </script>
</head>

<body>

    <div class='segment sg-dash sg-dark sg-fill' id="dash">
        <div class="segment-wrapper sg-split">
            <div id="sg-dash-img">
                <!-- EMPTY DUE TO CSS BACKGROUND IMAGE-->
            </div>
            <div id="sg-dash-info">
                <div class="transformation-wrapper dash-info-wrapper">
                    <span class="name">
                        <span class="first-name fade" fade="fade-in-left">
                            Wir haben
                        </span>
                        <span class="last-name fade" fade="fade-in-right">
                            geheiratet
                        </span>
                    </span>
                    <span class="profession fade" fade="fade-in-bottom" fade-delay="1000">
                        am 19.03.2022
                    </span>
                </div>
            </div>
            <!-- <div class="scroll-wrapper fade" fade-delay="2000">
                <img src="./img/scroll.gif" class="scroll-down fade" fade-delay="3000">
            </div> -->
        </div>
    </div>

    <div class="segment sg-career" id="timeline">
        <div class="segment-wrapper sg-contained">
            <h2 class="headline hl-dark fade" fade="fade-in-scale">
                Bilder
            </h2>

            <div class="cv">
                <div class="cv-entity">
                    <h3 class="year">

                    </h3>
                    <h2 class="fade" fade="fade-in-left">
                        Gottesdienst und Sektempfang
                    </h2>
                    <p class="fade" fade="fade-in-left" fade-delay="500">
                        <a href="https://1drv.ms/u/s!As7inKc5Bt-zge5-O8AdruqtstXRdg?e=d7SXSX">Zu OneDrive</a>
                    </p>
                </div>
                <div class="cv-entity">
                    <h2 class="fade" fade="fade-in-right">
                        Feier
                    </h2>
                    <p class="fade" fade="fade-in-right" fade-delay="500">
                        <a href="https://1drv.ms/u/s!As7inKc5Bt-zge58jGITb-j4N6nz8g?e=0OaAjc">Zu OneDrive</a>
                    </p>
                </div>
                <div class="cv-entity">
                    <h2 class="fade" fade="fade-in-left">
                        Gruppenfotos Feier
                    </h2>
                    <p class="fade" fade="fade-in-left" fade-delay="500">
                        <a href="https://1drv.ms/u/s!As7inKc5Bt-zge58jGITb-j4N6nz8g?e=p6bNBj">Zu OneDrive</a>
                    </p>
                </div>
                <div class="cv-entity">
                    <h2 class="fade" fade="fade-in-right">
                        Fotoshooting Sophia & Tobit
                    </h2>
                    <p class="fade" fade="fade-in-right" fade-delay="500">
                        <a href="https://1drv.ms/u/s!As7inKc5Bt-zge58jGITb-j4N6nz8g?e=grTEhH">Zu OneDrive</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="segment sg-quote sg-small sg-bigpad sg-dark" id="quote">
        <div class="segment-wrapper">
            <div class="quote-wrapper">
                <p class="quote">
                    Befiehl dem HERRN deine Wege und hoffe auf ihn, er wird's wohlmachen.
                    <span>Psalm 37,5</span>
                </p>
            </div>
        </div>
    </div>


    <!-- <div class="segment sg-share sg-small sg-bigpad" id="share">
        <div class="segment-wrapper sg-contained sg-centered">
            <div class="social-media">
                <a href="whatsApp://send?text=<?php echo rawurlencode("Schau mal hier!\r\nhttps://sebamomann.de"); ?>">
                    <img src="img/share.svg" alt="share icon">
                    WhatsApp
                </a>
                <a href="tg://msg_url?url=<?php echo rawurlencode("Schau mal hier!\r\nhttps://sebamomann.de"); ?>">
                    <img src="img/share.svg" alt="share icon">
                    Telegram
                </a>
                <a href="https://twitter.com/intent/tweet?text=Seba%20Momann%20Hobby%20Webdeveloper%20-%20Personal%20Webpage%21%0D%0Ahttps%3A%2F%2Fsebamomann.de" class="twitter-share-button">
                    <img src="img/share.svg" alt="share icon">
                    Twitter
                </a>
            </div>
        </div>
    </div> -->
</body>

</html>
