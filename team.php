<?php
include 'assets/templates/vars.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>DigitalTeal - Team</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/team" />
        <meta name="description" content="
        <?php echo $digitalTealConfig["metaDescription"]; ?>
        " />
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
        <nav class="w3-bar w3-teal" style="border: 1px solid #ffe41c; border-bottom: none;">
            <img src="https://digitalteal.com/assets/img/logo.png" class="w3-bar-item" style="height: 10%; width: 7%;" />
            <a href="/" class="w3-button w3-bar-item">About</a>
            <a href="/#jumpbound" class="w3-button w3-bar-item">JumpBound</a>
            <a href="#" class="w3-button w3-bar-item">Team</a>
            <a href="/subtoemail" class="w3-button w3-bar-item">Subscribe to email marketing</a>
            <a href="/contact" class="w3-button w3-bar-item">Contact</a>
        </nav>
        <!-- Banner -->
        <img
            src="https://i.ibb.co/7bmKnqd/Digital-Teal-Banner.jpg"
            alt="The DigitalTeal banner. Contains the brand name DigitalTeal on a purple background."
            title="The DigitalTeal banner. Contains the brand name DigitalTeal on a purple background."
            class="banner"
            style="width: 100%; border: 1px solid #ffe41c;"
        />
        <!-- Description -->
        <section id="description" class="w3-container w3-center w3-content">
            <div class="container">
                <h2>DigitalTeal - Team</h2>
                <br/>
                Special thanks: opengameart.org, Michelle Bucelli
                <br/>
                <div class="row">
                    <div class="col-sm-4">
                        <h2>DigitalTeal Team</h2>
                        <p>This page contains a list of DigitalTeal's group members.</p>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#leadership" id="defaultOpen" onclick="openTab(event, 'leadership');">Production, marketing, and leadership team</a>
                                <a class="nav-link" href="#art" onclick="openTab(event, 'art');">Art/audio team</a>
                                <a class="nav-link" href="#coding" onclick="openTab(event, 'coding');">Programming team</a>
                            </li>
                        </ul>
                        <hr class="d-sm-none" />
                    </div>
                    <noscript>JavaScript is required for this page to display properly.</noscript>

                    <div class="tabcontent col-sm-8" id="leadership" style="display: inline-block;">
                        <div class="card" style="color: black;">
                            <p>Connor Ahern</p>
                            <p class="title">Owner</p>
                        </div>

                        <div class="card">
                            <p>Pineapplecake41</p>
                            <p class="title">Co-Owner, Producer</p>
                        </div>
                        
                        <div class="card">
                            <p>Emily Piza</p>
                            <p class="title">Social Media Manager</p>
                        </div>
                    </div>

                    <div class="tabcontent col-sm-8" id="coding" style="display: none;">
                        <div class="card">
                            <p>Connor Ahern</p>                            
                            <p class="title">Product Manager</p>
                        </div>
                        
                        <div class="card">
                            <p>irhrhd</p>                            
                            <p class="title">Software Engineer</p>
                        </div>
                    </div>

                    <div class="tabcontent col-sm-8" id="art" style="display: none;">
                        <div class="card">
                            <p>Tree</p>                            
                            <p class="title">Pixel artist</p>
                        </div>

                        <div class="card">
                            <p>Magisukiyo</p>                            
                            <p class="title">Audio Producer</p>
                        </div>

                        <div class="card">
                            <p>Solo789</p>                            
                            <p class="title">Concept Artist</p>
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

                document.getElementById(tabName).style.display = "inline-block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>
