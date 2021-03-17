<!DOCTYPE html>
<html>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/w3css/3/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <title>DigitalTeal - Home page</title>
    <meta name="description" content="DigitalTeal is a coding group consisting of 5 members. Currently, DigitalTeal is developing a new and open-source game called JumpBound." />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://www.digitalteal.com/subtoemail" />
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

    <?php include("assets/templates/analyticsCode.html"); ?>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap");
        body {
            font-family: Rubik;
            background-color: #701c3c;
        }
        #description {
            background-color: #701c3c;
            color: white;
        }
    </style>
    <body>
        <!-- Navigation -->
        <nav class="w3-bar w3-teal" style="border: 1px solid #ffe41c; border-bottom: none;">
            <a href="/" class="w3-button w3-bar-item">About</a>
            <a href="#" class="w3-button w3-bar-item">JumpBound</a>
            <a href="/team" class="w3-button w3-bar-item">Team</a>
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
        <section id="description" class="w3-container w3-center w3-content" style="max-width: 600px;">
            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <h1 style="border-bottom: 3px solid #ffe41c;">DigitalTeal - Subscribe to email marketing</h1>
                    <div class="col-sm-4">
                        <h1><?php echo $digitalTealConfig["aboutHeader"]; ?></h1>
                        <p><?php echo $digitalTealConfig["about"]; ?></p>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#info" onclick="openTab(event, 'info');" id="defaultOpen">Subscribe to email marketing</a>
                            </li>
                        </ul>
                        <hr class="d-sm-none" />
                    </div>
                    <div class="col-sm-8 tabcontent" id="info" style="display: block;">
                        <noscript>JavaScript is required for this page to display properly.</noscript>

                        <p>Use this page to subscribe to emails about surveys, new products, and product announcements.</p>

                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdRRsKOOtm6CN3dqBzEV3WJ7pjWglb8rhTJY6wxhJjDmdG-tw/viewform?embedded=true" width="640" height="415" frameborder="0" marginheight="0" marginwidth="0">
                            Loading…
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
            <a href="https://facebook.com/DigitalTeal"><i class="fa fa-facebook-official"></i></a>
            <a href="https://instagram.com/digital_teal"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/digital_teal"><i class="fa fa-twitter"></i></a>
        </footer>

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
        </script>
    </body>
</html>
