<?php
include 'assets/templates/vars.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/w3css/3/w3.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
        <title>DigitalTeal - Home page</title>
        <meta name="description" content="<?php echo $digitalTealConfig["metaDescription"] ?>"/>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@digital_teal" />
        <meta name="twitter:title" content="DigitalTeal - Home page" />
        <meta name="twitter:description" content="<?php echo $digitalTealConfig["metaDescription"]; ?>" />
        <meta name="twitter:image" content="https://digitalteal.com/assets/img/logo.png" />
        <meta name="twitter:image:alt" content="The DIgitalTeal logo" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/site.webmanifest" />
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#008080" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />

        <?php include("assets/templates/analyticsCode.html"); ?>


    </head>

    <body>
        <!-- Navigation -->
        <nav class="w3-bar w3-teal" style="border: 1px solid #ffe41c;">
            <img src="https://digitalteal.com/assets/img/logo.png" class="w3-bar-item" style="height: 10%; width: 7%;" />
            <a href="#" class="w3-button w3-bar-item w3-black">About</a>
            <a href="https://wiki.jumpbound.com/wiki/JumpBound_Wiki" class="w3-button w3-bar-item">JumpBound</a>
            <a href="/team" class="w3-button w3-bar-item">Team</a>
            <a href="/subtoemail" class="w3-button w3-bar-item">Subscribe to email marketing</a>
            <a href="/blog" class="w3-button w3-bar-item">Blog</a>
            <a href="/contact" class="w3-button w3-bar-item">Contact</a>
        </nav>

        <!-- Description -->
        <section id="description" class="w3-container w3-center w3-content" style="max-width: 600px; text-align: center;">
            <div class="container" style="margin-top: 30px; text-align: center;">
                <h1>DigitalTeal</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <h2><?php echo $digitalTealConfig["aboutHeader"]; ?></h2>
                        <p><?php echo $digitalTealConfig["about"]; ?></p>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#info" onclick="openTab(event, 'info');" id="defaultOpen">Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#jumpbound" onclick="openTab(event, 'jumpbound');" id="jumpboundOpen">JumpBound</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#updates" onclick="openTab(event, 'updates');" id="updatesOpen">Latest updates</a>
                            </li>
                        </ul>
                        <hr class="d-sm-none" />
                    </div>
                    <div class="col-sm-8 tabcontent" id="info" style="display: block;">
                        <noscript>JavaScript is required for this page to display properly.</noscript>
                        <h2>General information</h2>
                        <?php echo $digitalTealConfig["about"]; ?>
                        <br />
                        <br />
                        We plan to release a game around April-May 2021 called JumpBound, then develop multiple other apps and games, for both mobile and desktop. Click the "JumpBound" link for more information.
                    </div>
                    <div class="col-sm-8 tabcontent" id="jumpbound" style="display: none;">
                        <b>For more information, please see the <a href="https://wiki.jumpbound.com">Jumpbound Wiki</a>.</b>
                        <br/>
                        <br/>
                        <img
                            src="https://i.ibb.co/51vz0v5/jumpbound.png"
                            alt="A banner containing the words “JumpBound”, with “Jump” colored black and “Bound” colored brown. Three lines, the middle one red, appear above the part of “JumpBound” that reads “Jump”. The background is a dark brown paper scroll."
                            title="The JumpBound banner"
                            border="0"
                        />
                        <h2>JumpBound</h2>
                        JumpBound is a 3D role-playing game designed around a theme of mystery and adventure. The player is trapped inside a prison-like cell, cursed by an evil overlord causing the player to be unable to make large jumps
                        with their entire memory erased.
                        <br />
                        <br />
                        Upon further investigation, the outside world believes that the overlord was not succesful in designing a fool-proof prison or curse, but outsiders were unable to access the prison themself; it's up to you to escape
                        the prison and defeat the overlord... can you?
                        <br />
                        <br />
                        We will be posting updates about JumpBound on our social media accounts, especially our <a href="https://twitter.com/digital_teal">Twitter</a>. It will be released by April 23rd, 2021.
                    </div>
                    <div class="col-sm-8 tabcontent" id="updates" style="display: none;">
                        <h2>Latest updates</h2>
                        <h3>Social media</h3>
                        This section displays updates from social media accounts of DigitalTeal.
                        <h4>Twitter</h4>
                        <a class="twitter-timeline" data-width="300" data-height="300" data-dnt="true" href="https://twitter.com/digital_teal?ref_src=twsrc%5Etfw">Tweets by digital_teal</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <div
                            class="fb-page"
                            data-href="https://www.facebook.com/digitalteal"
                            data-tabs="timeline"
                            data-width="300"
                            data-height="300"
                            data-small-header="true"
                            data-adapt-container-width="true"
                            data-hide-cover="false"
                            data-show-facepile="true"
                        >
                            <blockquote cite="https://www.facebook.com/digitalteal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/digitalteal">DigitalTeal</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include 'assets/templates/footer.html'; ?>

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

            /* Automatic opening of sections based on URLs */
            if (window.location.href.includes("#")) {
                if (window.location.href.endsWith("#jumpbound")) {
                    document.getElementById("jumpboundOpen").click();
                } else if (window.location.href.endsWith("#updates")) {
                    document.getElementById("updatesOpen").click();
                } else {
                    document.getElementById("defaultOpen").click();
                }
            } else {
                document.getElementById("defaultOpen").click();
            }
        </script>
    </body>
</html>
