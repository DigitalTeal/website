<?php
require ("vars.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DigitalTeal - Home page</title>
        <meta name="description" content=" <?php echo $digitalTealConfig["metaDescription"] ?> "/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EJM0MNFCZ5"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-EJM0MNFCZ5");
        </script>
    </head>
    <body>
        <?php include ("navbar.html"); ?>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link default-open active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./team">Team</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-sm-4">
                    <h1><?php echo $digitalTealConfig["aboutHeader"]; ?></h1>
                    <p><?php echo $digitalTealConfig["about"]; ?></p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#info" onclick="openTab(event, 'info');" id="defaultOpen">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jumpbound" onclick="openTab(event, 'jumpbound');" id="jumpboundOpen">JumpBound</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#updates" onclick="openTab(event, 'updates');">Latest updates</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none" />
                </div>
                <div class="col-sm-8 tabcontent" id="info" style="display: block;">
                    <h2>General information</h2>
                    <?php echo $digitalTealConfig["about"]; ?>
                    <br /><br/>
                    We plan to release a game around April-May 2021 called JumpBound, then develop multiple other apps and games, for both mobile and desktop. Click the "JumpBound" link for more information.
                </div>
                <div class="col-sm-8 tabcontent" id="jumpbound" style="display: none;">
                    <h2>JumpBound</h2>
                    Currently, we are working on a game called JumpBound. The game will be released around April-May 2021, and a trailer should be released near the start of March.
                </div>
                <div class="col-sm-8 tabcontent" id="updates" style="display: none;">
                    <h2>Latest updates</h2>
                    <h3>Social media</h3>
                    <h4>Twitter</h4>
                    <a class="twitter-timeline" data-width="300" data-height="300" data-dnt="true" href="https://twitter.com/digital_teal?ref_src=twsrc%5Etfw">Tweets by digital_teal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
        
        <?php include ("footer.html"); ?>

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

                document.getElementById(tabName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            
            if(window.location.href.endsWith("#jumpbound")) {
                document.getElementById("jumpboundOpen").click();
            } else {
                document.getElementById("defaultOpen").click();
            }
        </script>
    </body>
</html>
