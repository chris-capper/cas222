<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/reset.css">
        <link rel="stylesheet" href="styles/helper.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/slideshow.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="scripts/newscript.js"></script>
        <title>Ace in the Hole</title>
    </head>
    <body>
        <?php include 'includes/nav.inc.html.php'; ?>
        <?php include 'includes/header.inc.html.php'; ?>
        <!-- <div id="hero-image">placeholder</div>-->
        <?php include 'includes/slideshow.inc.html.php'; ?>
        <main>
            <div class="grid-parent">
                <div class="grid1">
                    <p>Ace in the Hole Multisport Events is proud to offer running and triathlon 
                        events to athletes of all shapes and sizes, national origins, gender 
                        identifications and cultural backgrounds. We offer Events for Every Body.</p>
                    <p>There is something for every level of athletic ability. The weekend includes 
                        a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K 
                        and Half marathon runs. Come to experience your first race or come to compete 
                        to win, but make sure you come to have fun!</p>
                    <p>Interested to learn more? <a href="events/index.php">Visit our Events page here!</a></p>
                    <p>Questions? <a href="faq/index.php">Check out our FAQ page!</a> Or <a href="about/index.php">
                        send us a message directly!</a></p>
                </div>
                <div class="grid4" id="twitter-feed">
                    <a class="twitter-timeline" data-width="500" data-height="500" data-theme="light" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="grid3" id="facebook-feed">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline%2C%20events%2C%20messages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </main>
        <div class="grid2" id="weather-feed">
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d51n122d69/97201/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark" >PORTLAND WEATHER</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
        </div>
        <?php include 'includes/footer.inc.html.php' ?>
    </body>
</html>