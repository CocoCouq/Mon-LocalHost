<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../MyLocalHost/assets/css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="../../MyLocalHost/vendor/highlight/styles/solarized-dark.css" rel="stylesheet" type="text/css"/>
    <link href="../../MyLocalHost/assets/config/config.css" rel="stylesheet" type="text/css"/>
    <title><?= $title; ?></title>
  </head>
  <body>
        <div class="fixed-action-btn">
            <a class="blackMenu btn-floating btn-large red">
                <i class="large material-icons grey darken-4">menu</i>
            </a>
            <ul>
                <li><a class="btn-floating red return"><i class="material-icons">undo</i></a></li>
                <li><a href="../../MyLocalHost/index.php" class="btn-floating blue-grey lighten-1"><i class="material-icons">home</i></a></li>
            </ul>
        </div>
    <header class="row z-depth-4">
            <input class="col s4 offset-s1 btn z-depth-1 red return" id="returnTop" type="button" value="Retour"/>
        <div id="DivElement" class="valign-wrapper container">
            <h1><?= $title; ?></h1>
            <div class="center-align col s3 collection white">
                <h2 id="Menu" class="collection-item black-text">ELEMENTS</h2>
            </div>
        </div>
    </header>
      <nav class="row z-depth-3 grey darken-4">
          <a href="../../MyLocalHost/index.php" class="flow-text col s6 offset-s1 center-align">HOST</a>
      </nav>
    <main>

       

        
<?php 
    function Close() {
?>
          
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../MyLocalHost/vendor/highlight/highlight.pack.js"></script>
    <script src="../../MyLocalHost/assets/js/materialize.js"></script>
    <script src="../../MyLocalHost/assets/config/config.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>
<?php       
    }
?>
