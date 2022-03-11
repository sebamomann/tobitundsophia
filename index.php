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
                            Wir
                        </span>
                        <span class="last-name fade" fade="fade-in-right">
                            Heiraten
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


    <div class="segment sg-main bright parallax" id="main">
        <div class="segment-wrapper sg-contained">
            <div class="sg-main-info sg-left">
                <div class="main-info-wrapper">
                    <div class='info-block fade bright' fade="fade-in-left">
                        <section>
                            <h1>
                                Update
                            </h1>
                            <p>
                                Gott sei Dank gab es in letzter Zeit weitere Lockerungen, sodass wir keine Platzprobleme mehr haben und ihr alle kommen könnt! Danke auch fürs Mitbeten.
                            </p>
                        </section>
                    </div>

                    <div class='info-block fade bright' fade="fade-in-left">
                        <section>
                            <h2>
                                Übertragung
                            </h2>
                            <p>
                                Hier der Link zur Übertragung für die, die nicht kommen können: <a href="https://dein.li/tobitundsophia">Stream</a>
                            </p>
                        </section>
                    </div>

                    <div class='info-block fade bright' fade="fade-in-right">
                        <section>
                            <h2>
                                Parkplätze
                            </h2>
                            <p>
                                Wenn ihr mit dem Auto anreist, rechnet am Besten etwas mehr Zeit für die Suche eines Parkplatzes ein.
                            </p>
                        </section>
                    </div>

                    <div class='info-block fade bright' fade="fade-in-left">
                        <section>
                            <h2>
                                Sitzordnung
                            </h2>
                            <p>
                                Es wird doch einen genauen Sitzplan für jeden Gast geben, den wir auch noch vorab hier hochladen werden, also schaut Freitag/Samstag nochmal rein.
                            </p>
                        </section>
                    </div>

                    <div class='info-block fade bright' fade="fade-in-right">
                        <section>
                            <h2>
                                Sektempfang
                            </h2>
                            <p>
                                Und zum Schluss: der Sektempfang wird draußen stattfinden, also nehmt euch warme Sachen mit ;-)
                            </p>
                        </section>
                    </div>

                    <div class='info-block fade bright' fade="fade-in-left">
                        <section>
                            <p>
                                Wir sind schon sehr gespannt und freuen uns auf euch!<br /></br>
                                Sophia&Tobit
                            </p>
                        </section>
                    </div>
                </div>
            </div>

            <div></div>
        </div>
    </div>


    <div class="segment sg-career" id="timeline">
        <div class="segment-wrapper sg-contained">
            <h2 class="headline hl-dark fade" fade="fade-in-scale">
                Timeline
            </h2>

            <div class="cv">
                <div class="cv-entity">
                    <h3 class="year">
                        14:00 - 15:00Uhr
                    </h3>
                    <h2 class="fade" fade="fade-in-left">
                        Trauung
                    </h2>
                </div>
                <div class="cv-entity">
                    <h3 class="year">
                        15:00 - 15:30Uhr
                    </h3>
                    <h2 class="fade" fade="fade-in-right">
                        Fotos
                    </h2>
                    <p class="fade" fade="fade-in-right" fade-delay="500">
                        Jo, wir machen Fotos
                    </p>
                </div>
                <div class="cv-entity">
                    <h3 class="year">
                        ab 15:30Uhr
                    </h3>
                    <h2 class="fade" fade="fade-in-left">
                        Sekt, Kaffee und Kuchen
                    </h2>
                    <p class="fade" fade="fade-in-left" fade-delay="500">
                        Im Anschluss zur Trauung treffen wir uns zum Kaffee und Kuchen
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