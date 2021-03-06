<?php
session_start();

include_once("config/config.php");

  if(!isset($_SESSION["urlcode"])){
      header("Location: main.php");
  }else{
    $urlcode = $_SESSION["urlcode"];
    $shorturl = $_SESSION["shorturl"];
  }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="shortcut icon" href="core/img/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon" href="core/img/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="core/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="core/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="core/img/favicon.ico" type="image/ico">
    <link rel="apple-touch-icon-precomposed" href="core/img/favicon.ico" type="image/ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>URL SHORTENER</title>

    <!-- BOOTSTRAP CSS -->
    <link href="core/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="core/css/surl.css" rel="stylesheet">
  </head>
  <body>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color bg-blue">
  <a class="navbar-brand" href="index.php">URL SHORTENER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="main.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
    </ul>
    <div class="form-inline">
    <ul class="navbar-nav mr-auto">
    </ul>
    </div>
  </div>
</nav>

<div class="mid">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center f-45 c-white m-top10">
        URL SHORTENER
      </div>
      <hr>

      <div class="col-md-12 text-center m-top10 bg-white">
        <br>
        <?php
                echo "<div class='col-md-12 f-mail'>"
                .$urlcode.
                "</div>
                <div class='col-md-12 f-link'>
                <a id='num' href='index.php/?url=".$shorturl."'>".$domain."/index.php?url=".$shorturl."</a>";
                echo "</div><br>";
                echo "<div class='col-md-12 f-mail'>

               <button class='btn bt-url' data-clipboard-action='copy' data-clipboard-target='#num'>Copy</button>


                </div>";

        session_destroy();
        ?>
        <br>

      </div>

    </div>
  </div>
</div>

<footer class="text-center footer">
  <p class="c-white-footer">URL-SHORTENER © COPYRIGHT BY <a class="no-style" href="www.davidespier.com">DAVID ESPIER</a></p>
</footer>

    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="core/vendor/jquery/jquery.min.js"></script>
    <script src="core/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="core/js/clipboard.min.js"></script>

    <script>
    var clipboard = new ClipboardJS('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  </body>

</html>
