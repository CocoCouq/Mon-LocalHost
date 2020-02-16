<!DOCTYPE html>
<?php $title = 'Dates'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>

<!------------------------------------------------------------------------------->

    <h3>EXERCICE 1</h3>     
    <h5>Affichez la date du jour au format mardi 2 juillet 2019</h5>
    
    <h6> 
    <?php
    
      //Déclaration des valeurs dans des tableaux
      $tabJours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
      $tabMois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
      // Declaration de la date
      $dateJour = date(N.m.Y.d); // (N : nºJourSemaine, m : nºMois, y : Année, d : nºJourMois)
      // Recupération des informations
      $dayWeek = intval($dateJour[0]) - 1; // -1 pour correspondre à $tabJours (idem pour $month et $tabMois)
      $month = intval($dateJour[1].$dateJour[2]) - 1;
      $years = intval($dateJour[3].$dateJour[4].$dateJour[5].$dateJour[6]);
      $day = intval($dateJour[7].$dateJour[8]);
      // Affichage du résultat
      echo "Nous sommes le ".$tabJours[$dayWeek]." ".$day." ".$tabMois[$month]." ".$years.".<br>";
      
    ?>
    </h6>
    
    <!--Version Objet-->
    
    <h6>
    <?php
      /* Version Obj */
      $today = new DateTime();
      $jour = $today->format('N') - 1;
      $mois = $today->format('m') - 1;
      echo "Le ".$tabJours[$jour]." ".$today->format('d')." ".$tabMois[$mois]." ".$today->format('Y').".";
      
    ?>
    </h6>  
        
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 2</h3>     
    <h5>Affichez la date du jour au format mardi 2 juillet 2019</h5>
    
    <h6> 
    <?php
    
      $dateObj = new DateTime('2019-07-14'); // Permet la représentation d'une date et heure
      // Objet->format('Type') Formate sous un certain 'Type'
      echo "2019-07-14, semaine nº : ".$dateObj->format('W')."."; // W permet d'obtenir le nº de la semaine

    ?>
    </h6>
        
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 3</h3>     
    <h5>Combien reste-t-il de jours avant la fin de votre formation ? fin de formation mise au 22 juin 2020</h5>

    <h6>
    <?php
    
      // Déclaration des objets date
      $finForm = new DateTime('2020-06-22');
      $today = new DateTime();
      // Nouvel Obj contenant les infos sur la diff
      $temps = $finForm->diff($today);
      /* var_dump($temps); */ // Je fais un var_dump me permet d'aller chercher l'element que je cherche
      echo "Il reste ".$temps->days." jours.";
      
    ?>
    </h6>
        
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 4</h3>     
    <h5>Idem avec `time()` et `mktime()`</h5>

    <h6>
    <?php
    
      $today = time(); // var_dump = int(1578836151)
      $finForm = intval(date(mktime(0, 0, 0, 3, 4, 2020)));
      $temps = intval(($finForm - $today) / 86400); //86400 -> Nbr de sec dans une journée
      echo "Il reste ".$temps." jours.";
      
    ?>
    </h6>
    
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 5</h3>     
    <h5>Quelle sera la prochaine année bissextile ?</h5>

    <h6>
    <?php
    
      $today = new DateTime();
      $today = $today->modify('+1 years'); // Pour ne pas avoir l'année actuelle
      while ($today->format('L') != 1) // Format 'L' - donne 1 si bissextile sinon 0
        $today = $today->modify('+1 years');
      echo "La prochaine année bissextile est ".$today->format('Y').".";
      
    ?>
    </h6>   
     
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 6</h3>     
    <h5>En utilisant l'objet DateTime, montrez que la date du 32/17/2019 est erronée</h5>

    <h6>
    <?php
    
      $dateError = DateTime::createFromFormat("d/m/Y", '32/17/2019'); // var_dump : object(DateTime)#3 (3) { ["date"]=> string(26) "2004-05-04 15:57:12.000000" ["timezone_type"]=> int(3) ["timezone"]=> string(3) "UTC" }
      $Error = $dateError->getLastErrors(); // var_dump : array(4) { ["warning_count"]=> int(1) ["warnings"]=> array(1) { [10]=> string(27) "The parsed date was invalid" } ["error_count"]=> int(0) ["errors"]=> array(0) { } }
      if ($Error["warning_count"] > 0)
            echo $Error["warnings"][10];

    ?>
    </h6>
    
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 7</h3>     
    <h5>Affichez l'heure courante sous cette forme : 12h25</h5>

    <h6>
    <?php
    
      $today = new DateTime();
      $today = $today->modify('+1 hours');
      $heure = $today->format("H\hi"); // J'echappe le h
      echo $heure;
 
    ?>
    </h6> 
       
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 8</h3>     
    <h5>Ajoutez 1 mois à la date courante</h5>

    <h6>
    <?php
    
      $today = new DateTime();
      $today = $today->modify('+1 month');
      echo $today->format('d/m/Y');
      
    ?>
    </h6>
    
    <h6>
    <?php

      $today2 = new DateTime();
      $today2->add(new DateInterval('P1M'));
      echo $today2->format('d/m/Y');
  
    ?>
    </h6>
     
<!------------------------------------------------------------------------------->
      
    <h3>EXERCICE 9</h3>     
    <h5>Que c'est il passé le 946080000 ?</h5>

    <h6>
    <?php
    
       $intVal = 946080000;
       $dateT = new DateTime("@$intVal");
       echo $dateT->format('d/m/Y H:i:s')." : Dernier Noel du millenaire";
       
    ?>
    </h6>
 
<?php Close(); ?>
