<?php
require ("assets/templates/vars.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DigitalTeal - Email marketing</title>
        <meta name="description" content="<?php echo $digitalTealConfig["metaDescription"]; ?>"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="canonical" href="https://www.digitalteal.com/subtoemail" />
        
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#008080">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />

<?php include("assets/templates/analyticsCode.html"); ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="oG4OyHff"></script>

        <?php include ("assets/templates/navbar.html"); ?>

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
                        <a class="nav-link" href="./team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Subscribe to email marketing</a>
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
                            <a class="nav-link active" href="#">Subscribe to email marketing</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none" />
                </div>
                <div class="col-sm-8 tabcontent" id="info" style="display: block;">
                    <noscript>JavaScript is required for this page to be displayed.</noscript>
                    Use this page to subscribe to emails about surveys, new products, and product announcements.
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdRRsKOOtm6CN3dqBzEV3WJ7pjWglb8rhTJY6wxhJjDmdG-tw/viewform?embedded=true" width="640" height="415" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
              
            </div>
        </div>
        
        <?php include ("assets/templates/footer.html"); ?>

    </body>
</html>
