<?php
require("templates/vars.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DigitalTeal - Team</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/team" />
        <meta name="description" content=" <?php echo $digitalTealConfig["metaDescription"] ?> "/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EJM0MNFCZ5"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-EJM0MNFCZ5");
        </script>
        
                
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "3661322217313838");
            fbq("track", "PageView");
        </script>
        <noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=3661322217313838&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>
    <body>
        <?php include("navbar.html"); ?>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Team</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-sm-4">
                    <h1>DigitalTeal Team</h1>
                    <p>This page contains a list of DigitalTeal's group members.</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#leadership" id="defaultOpen" onclick="openTab(event, 'leadership');">Leadership team</a>
                            <a class="nav-link" href="#art" onclick="openTab(event, 'art');">Art team</a>
                            <a class="nav-link" href="#coding" onclick="openTab(event, 'coding');">Coding team</a>
                            <a class="nav-link" href="#design" onclick="openTab(event, 'design');">Design team</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none" />
                </div>

                <div class="tabcontent col-sm-8" id="leadership" style="display: flex;">
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>NameIsA</h1>
                        <p class="title">Owner, Game Producer</p>
                    </div>
                    <br />

                    <div class="card">
                        <img src="https://i.ibb.co/rx68RW2/Screenshot-10.png" alt="Screenshot-10" border="0" style="width: 50%;" />
                        <h1>Pineapplecake14</h1>
                        <p class="title">Co-Owner, Game Co-Producer</p>
                    </div>
                </div>

                <div class="tabcontent col-sm-8" id="design" style="display: none;">
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>NameIsA</h1>
                        <p class="title">Game Concept/Level Design</p>
                    </div>
                    <br />
                    <div class="card">
                        Story design has been a project done by all members of the DigitalTeal team.
                    </div>
                </div>

                <div class="tabcontent col-sm-8" id="coding" style="display: none;">
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>NameIsA</h1>
                        <p class="title">Game Programmer, Web Developer</p>
                    </div>
                </div>

                <div class="tabcontent col-sm-8" id="art" style="display: none;">
                    <div class="card">
                        <h1>Tree</h1>
                        <p class="title">Icon artist, pixel artist</p>
                    </div>
                    <br />
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>NameIsA</h1>
                        <p class="title">Game Concept Artist</p>
                    </div>
                    <br />
                    <div class="card">
                        <h1>YeetYeetYeetYeetYees</h1>
                        <p class="title">Game rendering/modeling</p>
                    </div>
                    <br />
                    <div class="card" style="display: inline-block;">The credit for a large amount of the UI goes to opengameart.org, especially <a href="https://opengameart.org/users/buch">Michele Bucelli</a>.</div>
                </div>
            </div>
        </div>

        <?php include("footer.html"); ?>

        <script>
            // code based on https://w3schools.com/howto/tryit.asp?filename=tryhow_js_vertical_tabs
            function openTab(evt, tabName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");

                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tablinks = document.querySelectorAll(".nav-pills > li.nav-item > a");

                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                document.getElementById(tabName).style.display = "flex";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>
