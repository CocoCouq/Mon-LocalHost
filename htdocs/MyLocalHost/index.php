<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/materialize.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <meta charset="utf-8">
        <title>Mon Local Hot</title>
    </head>
    <body class="indigo lighten-1">
        
        <?php 
            // Recupération de mon localhost
            $repo = scandir('../../../../../../../../Applications/MAMP/htdocs');
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
                        <a id="GitH" class="waves-effect waves-light blue row card-panel" href="https://github.com/CocoCouq">
                            <img id="imgGit" class="responsive-img" src="assets/images/Git.png" alt="Image Github" title="Github">
                        </a>
                    </aside>
                </article>
            </section>
<!-- Navbar -->
            <div class="col s12">
                <nav id="navBar" class="z-depth-2 black navbar-fixed" role="navigation">
                    <div class="nav-wrapper row">
                    <?php 
                        $i = 0;
                        foreach($repo as $value) { 
                            if($repo[$i] == 'MyLocalHost') {
                    ?>
                        <a href="#!" class="liensMenu brand-logo col s2 offset-s1 hide-on-med-and-down center-align">Host</a>
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
                                    if($repo[$i] != 'MyLocalHost' && $repo[$i] != 'Presentations' && $repo[$i] != '..' && $repo[$i] != '.DS_Store') {
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
                             if($repo[$i] != 'MyLocalHost' && $repo[$i] != 'Presentations' && $repo[$i] != '..' && $repo[$i] != '.DS_Store') {
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
<!-- Main -->
        <main class="z-depth-3 container card-panel white-text center-align row">
            <h2 class="col s12">“Rien n’est plus nécessaire que le superflu…”</h2>
            <p class="col s3 offset-s8">
                Guido, <ins><i>La vie est belle</i></ins>
            </p>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/index.js"></script>
</html>
