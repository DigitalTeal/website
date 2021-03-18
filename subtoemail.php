<?php
include 'assets/templates/vars.php';
?>

<!DOCTYPE html>
<html>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/w3css/3/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <title>DigitalTeal - Subscribe to email marketing</title>
    <meta name="description" content="<?php echo $digitalTealConfig["metaDescription"] ?>"/>
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
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@digital_teal" />
    <meta name="twitter:title" content="DigitalTeal - Home page" />
    <meta name="twitter:description" content="
    <?php echo $digitalTealConfig["metaDescription"]; ?>
    " />
    <meta name="twitter:image" content="https://digitalteal.com/assets/img/logo.png" />
    <meta name="twitter:image:alt" content="The DIgitalTeal logo" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />

    <?php include("assets/templates/analyticsCode.html"); ?>
    <body>
        <!-- Navigation -->
        <nav class="w3-bar w3-teal" style="border: 1px solid #ffe41c;">
            <img src="https://digitalteal.com/assets/img/logo.png" class="w3-bar-item" style="height: 10%; width: 7%;" />
            <a href="/" class="w3-button w3-bar-item">About</a>
            <a href="https://wiki.jumpbound.com/wiki/Main_Page" class="w3-button w3-bar-item">JumpBound</a>
            <a href="/team" class="w3-button w3-bar-item">Team</a>
            <a href="/subtoemail" class="w3-button w3-bar-item w3-black">Subscribe to email marketing</a>
            <a href="/contact" class="w3-button w3-bar-item">Contact</a>
        </nav>

        <!-- Description -->
        <section id="description" class="w3-container w3-center w3-content" style="max-width: 600px;">
            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <h1>DigitalTeal - Subscribe to email marketing</h1>
                    <div class="col-sm-4">
                        <h2><?php echo $digitalTealConfig["aboutHeader"]; ?></h2>
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

            document.getElementById("defaultOpen").click();
        </script>
    </body>
</html>
