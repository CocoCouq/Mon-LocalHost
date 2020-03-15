
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../MyLocalHost/assets/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="../MyLocalHost/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Mon Local Hot</title>
    </head>
    <body class="indigo lighten-1">
        
        <?php 
            $filtreRepo = '/(\.DS_Store)|(README\.md)|(MyLocalHost)|(\.\.)|(\.)|(LICENSE)/';
            // Recupération de mon localhost
            $repo = scandir('../');
        ?>
        
<!-- Header -->
        <header class="z-depth-3 white-text row" role="banner">
            <section class="col s12">
                <h1 class="center-align">Corentin Couq</h1>
                <article class="row section valign-wrapper">
                    <blockquote class="col s6 offset-s1">
                        <ins class="flow-text">Mon Local Host</ins><br>
                        Systeme de gestion de sever local pour MAMP
                    </blockquote>
                    <aside class="col offset-s2" role="presentation">
                        <a id="GitH" class="waves-effect waves-light blue row card-panel white-text" href="https://github.com/CocoCouq">
                            Git
                        </a>
                    </aside>
                </article>
            </section>
<!-- Navbar -->
            <div class="col s12">
                <nav id="navBar" class="z-depth-2 black navbar-fixed" role="navigation">
                    <div class="nav-wrapper row">
                    <!-- Affichage des fichiers de mon LocalHost dans la Navbar -->
                    <?php 
                        $i = 0;
                        foreach($repo as $value) { 
                            if($repo[$i] == 'MyLocalHost') {
                    ?>
                        <a href="../MyLocalHost/index.php" class="liensMenu brand-logo col s2 offset-s1 hide-on-med-and-down center-align">Host</a>
                        <?php 
                             }
                             $i++;
                        }
                    ?>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down col offset-s1">
                            <?php 
                                $i = 0;
                                foreach($repo as $value) { 
                                    if(!preg_match($filtreRepo, $repo[$i])) {
                             ?>
                            <li><a class="liensMenu" href="<?php echo '../'.$repo[$i]; ?>"><?php echo $repo[$i]; ?></a></li>
                                <?php 
                                    }
                                    $i++;
                                 }?>
                         </ul>
                    </div>
                </nav>
<!-- M-S Navbar -->
                <ul class="sidenav" id="mobile-demo">
                    <?php 
                        $i = 0;
                        foreach($repo as $value) { 
                            if($repo[$i] == 'MyLocalHost') {
                    ?>
                    <li><a href="#">Host</a></li>
                     <?php 
                             }
                             $i++;
                        }
                    ?>
                    <?php 
                         $i = 0;
                         foreach($repo as $value) { 
                             if(!preg_match($filtreRepo, $repo[$i])) {
                     ?>
                    <li><a href="<?php echo '../'.$repo[$i]; ?>"><?php echo '../'.$repo[$i]; ?></a></li>
                     <?php 
                             }
                             $i++;
                        }
                    ?>
                </ul>
            </div>
        </header>
        <?php 
            // Recupération de mon dossier
            $All = scandir('./');
        ?>
<!-- Main -->
        <main class="z-depth-3 container card-panel white-text center-align row">
            <h2 class="col s12">Work In Progress</h2>
            <section>
                <article class="row">
                <?php 
                    $i = 0;
                    foreach ($All as $value) { 
                         if($All[$i] != '.' && $All[$i] != '.DS_Store' && $All[$i] != '..' && $All[$i] != 'index.php') {
                ?>
                    <a class="white-text center-align col s8 offset-s2 card flow-text indigo darken z-depth-5" href="<?php echo $All[$i]; ?>/<?php echo $All[$i].'.php'; ?>"><?php echo $All[$i]; ?></a>
                <?php 
                         }
                     $i++;
                 }
                ?>
                </article>
            </section>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../MyLocalHost/assets/js/materialize.js"></script>
    <script src="../MyLocalHost/assets/js/index.js"></script>
</html>
