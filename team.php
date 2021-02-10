<?php
require("vars.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DigitalTeal - Team</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="alert alert-info" role="alert">This site is under construction.</div>

        <div class="jumbotron text-center" style="margin-bottom: 0;">
            <img src="/assets/img/logo.png" alt="DigitalTeal Logo" />
        </div>

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
                    <h2>About</h2>
                    <p><?php
                        echo $digitalTealConfig["about"];
                    ?></p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Team</a>
                        </li>
                        <!--
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        -->
                    </ul>
                    <hr class="d-sm-none" />
                </div>
                <div class="col-sm-8">
                    <h1>Leadership</h1>
                    <div class="card">
                        <img src="https://i.ibb.co/6gTCphL/download.jpg" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>NameIsA</h1>
                        <p class="title">Owner, Game Producer, Game Concept/Level Design, Game Programmer</p>
                    </div>
                    <br/>
                    <div class="card">
                        <img src="https://i.ibb.co/rx68RW2/Screenshot-10.png" alt="Screenshot-10" border="0" style="width: 50%;" />
                        <h1>Pineapplecake14</h1>
                        <p class="title">Co-Owner, Game Co-Producer</p>
                    </div>
                    <br/>
                    <h1>Art</h1>
                    <div class="card">
                        <h1>Tree</h1>
                        <p class="title">Icon artist, pixel artist</p>
                    </div>
                    <br/>
                    <div class="card">
                        <img src="https://i.ibb.co/xm44wr8/Screenshot-9.png" alt="Screenshot-9" border="0" style="width: 50%;" />
                        <h1>LunifiedStorms</h1>
                        <p class="title">Game Concept Artist, Game Story Design</p>
                    </div>
                    <div class="card">
                        <h1>YeetYeetYeetYeetYees</h1>
                        <p class="title">Rendering/modeling</p>
                    </div>
                    
                    The credit for a large amount of the UI goes to opengameart.org, especially <a href="https://opengameart.org/users/buch">Michele Bucelli</a>.
                </div>
            </div>
        </div>

        <div class="jumbotron text-center" style="margin-bottom: 0;">
            <p>Copyright 2021, licensed under Mozilla Publice License 2.0, source code avalilable at <a href="https://github.com/DigitalTeal/website">this GitHub repository</a>.</p>
        </div>
    </body>
</html>