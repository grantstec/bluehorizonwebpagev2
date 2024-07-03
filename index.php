<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>


<!DOCTYPE html>
<html>

    <head>
        <title>Blue Horizon</title>
        <meta http-equiv="Content-Type" content="text/html" />
        <meta charset="UTF-8" />
        <meta name="author" content="Grant Stec" />
        <script
            src="/cdn-cgi/apps/head/6IZR6VXrlpzSjRK8uoMFS38Blx4.js"></script>
        <link rel="shortcut icon" type="image/vnd.microsoft.icon"
            href="assets/img/icon.ico?v=1.0" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <noscript>
            <link
                href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900"
                rel="stylesheet" />
            <link rel="stylesheet" href="assets/icons/css/all.min.css" />
        </noscript>
        <style id="__web-inspector-hide-shortcut-style__">
        .__web-inspector-hide-shortcut__,
        .__web-inspector-hide-shortcut__ *,
        .__web-inspector-hidebefore-shortcut__::before,
        .__web-inspector-hideafter-shortcut__::after {
            visibility: hidden !important;
        }
    </style>
    </head>

    <body id="body" class="dark menu-open"
        data-new-gr-c-s-check-loaded="14.1073.0" data-gr-ext-installed>
        <div class="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner">
                </div>
            </div>
        </div>
        <div class="menu" id="top"
            style="background-image: linear-gradient(90deg,rgb (243,122,15), rgb (255,144,2));">
            <div class="menu-item" data-target="home">
                Home
            </div>
            <br />
            <div class="menu-item" data-target="portfolio"
                style="transition: transform 0.25s ease 0.05s, opacity 0.25s ease 0.05s, all 0.25s ease">
                Subteams
            </div>
            <br />
            <div class="menu-item"
                style="transition: transform 0.25s ease 0.15s, opacity 0.25s ease 0.05s, all 0.25s ease">
                Other Info
            </div>
            <br />
            <div class="menu-item" data-target="contact"
                style="transition: transform 0.25s ease 0.1s, opacity 0.25s ease 0.05s, all 0.25s ease">
                <a href="logout.php">
                    Logout
                </a>
            </div>
            <div class="togglebox" title="Toggle Light/Dark Modes">
                <label class="switch" for="checkbox">
                    <input type="checkbox" id="checkbox" checked="checked" />
                    <div class="slider round">
                    </div>
                </label>
            </div>
        </div>
        <div class="wrapper">
            <div id="one">
                <div class="bigcheese"
                    style="background: linear-gradient(90deg, rgb(243, 122, 15), rgb(255, 133, 2)) text; -webkit-text-fill-color: rgba(0, 0, 0, 0.01);">
                    BlueHorizon
                </div>
                <div class="title"
                    style="background: linear-gradient(90deg, rgb(243, 122, 15), rgb(255, 133, 2)) text; -webkit-text-fill-color: rgba(0, 0, 0, 0.01);">
                    USAFA Rocketry Club
                    <br />
                    <span style="font-weight:600;font-size:75%">
                        (Est. 2020)
                        <br>
                        (exmaple) Mission: To inspire and develop the next generation of Engineering professionals through hands-on experience in high-powered rocketry.
                        <br>
                        (example) Vision: To be the premier high-powered rocketry team in the nation, providing cadets with the opportunity to develop their technical and leadership skills in a challenging and rewarding environment.
                        <br>
                    </span>
                </div>
                <div class="advice">
                    <i class="fas fa-chevron-down">
                    </i>
                </div>
            </div>
            <div id="two">
                <div class="content portfolio">
                    <h1>Subteams</h1>
                    <h3 class="about-me">
                    </h3>
                    <div class="portfolio-filters">
                        <div class="portfolio-filter" 
                            data-query>All</div>
                        <div class="portfolio-filter"
                            data-query="Engine">Engine</div>
                        <div class="portfolio-filter"
                            data-query="Airframe">Airframe</div>
                        <div class="portfolio-filter"
                            data-query="GSE">GSE</div>
                        <div class="portfolio-filter" 
                            data-query="Avionics">Avionics</div>
                        <div class="portfolio-filter" 
                            data-query="Archive">Archive</div>
                        <div class="portfolio-filter" 
                            data-query="Other">Other</div>

                    </div>
                    <div class="portfolio-box">
                        <div class="portfolio-item special tedx"
                            data-type="Engine"
                            title="Click to view more information">
                            <a href="Portfolio/#engine">
                                <div class="portfolio-background"> </div>
                                <div class="portfolio-title"
                                    style="text-align: left">Injector<br />
                                    <small>
                                        Impinging v1
                                    <br />June 2024
                                    </small>
                                    <br />
                                    <div class="tag" style="background-image: linear-gradient(90deg, rgb(243, 122, 15), rgb(255, 133, 2));">
                                        <i class="fas fa-space-shuttle">
                                        </i> Engine
                                    </div>
                                </div>
                                <div class="portfolio-button">+</div>
                            </a>
                        </div>
                        <div class="portfolio-item special1"
                            data-type="Airframe"
                            title="Click to view more information">
                            <a href="Portfolio/#tanks">
                                <div class="portfolio-background"> </div>
                                <div class="portfolio-title"
                                    style="text-align: left">Nitrous and IPA Tanks<br />
                                    <small>
                                        Piston based design
                                    <br />June 2024
                                    </small>
                                    <br />
                                    <div class="tag" style="background-image: linear-gradient(90deg, rgb(243, 122, 15), rgb(255, 133, 2));">
                                        <i class="fas fa-space-shuttle">
                                        </i> Airframe
                                    </div>
                                </div>
                                <div class="portfolio-button">+</div>
                            </a>
                        </div>

                    </div>
                    <footer>Made with <i class="fas fa-heart"></i> by Grant Stec</footer>
                </div>
            </div>
        </div>

        <script src="assets/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js.js" type="text/javascript"></script>
        <script type="text/javascript">
                var gfonts = document.createElement('link');
                gfonts.rel = 'stylesheet';
                gfonts.href = 'https://fonts.googleapis.com/css?family=Montserrat:400,700,900';
                gfonts.type = 'text/css';
                var godefer = document.getElementsByTagName('link')[0];
                godefer.parentNode.insertBefore(gfonts, godefer);

                var iconfonts = document.createElement('link');
                iconfonts.rel = 'stylesheet';
                iconfonts.href = 'assets/icons/css/all.min.css';
                iconfonts.type = 'text/css';
                var godefer2 = document.getElementsByTagName('link')[0];
                godefer2.parentNode.insertBefore(iconfonts, godefer2);
            </script>

        <!--[if IE]>
            <style>.menu{border-bottom-left-radius: none !important;border-bottom-right-radius: none !important}</style>
        <![endif]-->
        <script
            src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="714499beae3130a7d5f41d17-|49" defer></script>
    </body>

</html>

