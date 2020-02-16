
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../MyLocalHost/assets/css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="../../MyLocalHost/assets/config/config.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $title; ?></title>
  </head>
  <body>
        <div class="fixed-action-btn">
            <a class="blackMenu btn-floating btn-large red">
                <i class="large material-icons grey darken-4">menu</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">undo</i></a></li>
                <li><a href="../../MyLocalHost/index.php" class="btn-floating blue-grey lighten-1"><i class="material-icons">home</i></a></li>
            </ul>
        </div>
    <header class="row z-depth-4">
        <div class="navbar-fixed">
        <input class="col s4 offset-s1 btn z-depth-1 red" type="button" id="return" value="Retour"/>
        </div>
        <h1 class="col s12"><?php echo $title; ?></h1>
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
    <script src="../../MyLocalHost/assets/js/materialize.js"></script>
    <script src="../../MyLocalHost/assets/config/config.js"></script>
  </body>
</html>
<?php       
    }
?>
