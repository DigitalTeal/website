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
    <title>DigitalTeal - Contact</title>
    <meta name="description" content="<?php echo $digitalTealConfig["metaDescription"] ?>"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://www.digitalteal.com/contact" />
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
      <a href="/" class="w3-button w3-bar-item">About</a>
      <a href="/#jumpbound" class="w3-button w3-bar-item">JumpBound</a>
      <a href="/team" class="w3-button w3-bar-item">Team</a>
      <a href="/subtoemail" class="w3-button w3-bar-item">Subscribe to email marketing</a>
      <a href="#" class="w3-button w3-bar-item w3-black">Contact</a>
    </nav>
    
    <!-- Description -->
    <section id="description" class="w3-container w3-center w3-content" style="max-width: 600px;">
      <div class="container" style="margin-top: 30px;">
        <h1>DigitalTeal - Contact</h1>
        <div class="row">
          <div class="col-sm-4">
            <h2><?php echo $digitalTealConfig["aboutHeader"]; ?></h2>
            <p><?php echo $digitalTealConfig["about"]; ?></p>
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#info" onclick="openTab(event, 'info');" id="defaultOpen">Contact DigitalTeal</a>
              </li>
            </ul>
            <hr class="d-sm-none" />
          </div>

          <div class="col-sm-8 tabcontent" id="info" style="display: block;">
            <noscript>JavaScript is required for this page to display properly.</noscript>

            <p>Use this page to contact DigitalTeal regarding our products and services.</p>

            <a
              href="javascript:void(
        window.open(
          'https://form.jotform.com/210756563875062',
          'blank',
          'scrollbars=yes,
          toolbar=no,
          width=700,
          height=500'
        )
      )
    " class="w3-button w3-blue">
              Contact DigitalTeal staff
            </a>
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
